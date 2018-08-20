<!DOCTYPE html>
<html>
<head>
    <title>DelyAdmin | Edit Menu</title>
    <?php include 'config/links.php'; session_start(); ?>
</head>
<style type="text/css">
h1{font-family: "../css/font/Lobster.otf"}
</style>
<body>
    <div class="wrapper">

        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header ">
                <div class="row" style="background: #FF5722;">
                    <div class="col-sm-4" align="center">
                        <img src="../img/icon.png" class="rounded" alt="LOGO" >
                    </div>
                    <div class="col-sm-6">
                        <h1 style="padding-top: 15px ">DELY</h1>
                    </div>
                </div>
            </div>

            <ul class="list-unstyled " >
                <div class="row">
                    <div class="col-sm-4"align="center">
                        <?php 
                        $part = $_SESSION['part'];
                        echo "<img src='../../delyimgs/partners/".str_replace(' ','',$part)."logo.png' class='rounded' alt='LOGO' id='imgr'>";
                        ?>
                    </div>
                    <div class="col-sm-7">
                        <h6 style="padding-top: 5px"><i class="fa fa-utensils fa-fw"></i> <?php echo $_SESSION['part']; ?> </h6>
                        <div class="col-sm-5" style="float: right;" >
                            <?php 
                            require 'config/delydbcon.php';
                            $partid = $_SESSION['partid'];
                            $stmt = $con->prepare("SELECT * FROM delyorders WHERE Part_id = '$partid' AND Dely ='0' ");
                            $stmt->execute();
                            $stmt->store_result();
                            $num = $stmt->num_rows();
                            echo "<a href='deliveries.php'><i class='fa fa-truck fa-inverse'><span class='badge badge-danger'>".$num."</span></i></a>";
                            ?>
                        </div>
                    </div>
                </div>
                <li><a href="home.php"><i class="fa fa-home fa-fw"></i>  Home</a></li>
                <li><a href="deliveries.php"><i class="fa fa-truck fa-fw"></i>  Deliveries</a></li>
                <li class="active" > <a href="edit_menu.php"><i class="fa fa-edit fa-fw"></i>  Edit Menu</a></li>
                <li><a href="transactions.php"><i class="fa fa-hand-holding-usd fa-fw"></i>  Transactions</a></li>
                <li><a href="contact.php"><i class="fa fa-phone fa-fw"></i>  Contact</a></li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div style="width: 100%;" >
            <!-- Top Navbar  -->
            <nav class="navbar content navbar-expand-lg navbar-light bg-secondary">
                <button type="button" id="sidebarCollapse" class="btn btn-light">
                    <i class="fas fa-align-left"></i>
                </button>
                <button id="logout" type="button" class="btn btn-light ml-auto" >
                    <i class="fas fa-sign-out-alt"></i>
                </button>
            </nav>

            <!-- Header -->
            <div class="Content" style="width: 100%;" align="center">
                <h5 style="color: #FF5722"><b><i class="fa fa-edit fa-fw"></i> Edit Menu</b></h5>
            </div>

            <!-- menu table -->
            <div class="container" style="margin-top: 50px;" align="center">
                <div class="row">
                    <div class="col-sm-6">
                        <h4 style="color: #FF5722" >Menu Items</h4>
                    </div>
                    <div class="col-sm-6">
                        <button class="btn btn-outline-primary" data-toggle="modal" data-target="#addmodal" style="color: #FF5722" >Add Item <i class="fa fa-plus fa-fw"></i></button>
                    </div>
                </div>
                
                <?php
                require 'config/delydbcon.php';
                $partid = $_SESSION['partid'];
                $stmt = $con->prepare("SELECT delyitems.Item_id,delyitems.Item_cat,itemcat.Category,delyitems.Item_name,delyitems.Item_price FROM delyitems INNER JOIN itemcat ON delyitems.Item_cat = itemcat.Cat_id WHERE Partner = '$partid' ");
                $stmt->execute();
                $stmt->bind_result($iid,$catid,$cat,$name,$price);
                echo"<table class='table table-bordered' style='margin: 0 auto; width: 90%;'>
                    <thead class='text-center'>
                        <tr>
                            <th>Item Id</th>
                            <th>Item Category</th>
                            <th>Item </th>
                            <th>Item Price</th>
                            <th>Edit Item</th>
                        </tr>
                    </thead>";
                while ($stmt->fetch()) {
                    echo "<tbody class='text-center'>
                            <tr>
                                <td>".$iid."</td>
                                <td>".$cat."</td>
                                <td>".$name."</td>
                                <td>Ksh ".$price."</td>
                                <td><a data-toggle='modal' data-target='#editmodal'
                                href='javascript:edit();'
                                data-id=".$iid."
                                data-cat=".$catid."
                                data-name=".str_replace(' ','',$name)."
                                data-price=".$price."
                                <i id='editicon' class='fa fa-edit fa-fw' style='color: #FF5722;'></i></a></td>
                            </tr>
                        </tbody>";
                }
                echo "</table>
                </div>";
                ?>
            </div>

            <!-- add modal -->
            <div class="modal fade" id="addmodal">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" style="color: #FF5722">Add Item</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="config/additem.php">
                                <input type="hidden" name="id" value="<?php echo $_SESSION['partid']; ?>">

                                <select name="cat" class="custom-select mb-3" required>
                                    <option value="">Category</option>
                                    <option value="1">Beverages</option>
                                    <option value="2">Meals</option>
                                    <option value="3">Combo</option>
                                </select>
                                <div class="form-group input-group mb-3">
                                    <input placeholder="Item Name" type="text" 
                                    class="form-control" name="item" required>
                                </div>
                                <div class="form-group input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Ksh</span>
                                    </div>
                                    <input placeholder="Price" type="text" 
                                    class="form-control" name="price" required>
                                </div>
                                <button type="submit" class="btn btn-primary" style="float: right;">Add</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- edit modal -->
            <div class="modal fade" id="editmodal">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" style="color: #FF5722">Edit Item</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="config/edititem.php">
                                <input id="editid" type="hidden" name="id">
                                <select id="editcat" name="cat" class="custom-select mb-3" required>
                                    <option value="">Category</option>
                                    <option value="1">Beverages</option>
                                    <option value="2">Meals</option>
                                    <option value="3">Combo</option>
                                </select>
                                <div class="form-group input-group mb-3">
                                    <input id="editname" placeholder="Item Name" type="text" 
                                    class="form-control" name="item" required>
                                </div>
                                <div class="form-group input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">Ksh</span>
                                    </div>
                                    <input id="editprice" placeholder="Price" type="text" 
                                    class="form-control" name="price" required>
                                </div>
                                <button type="submit" class="btn btn-primary" style="float: right;">Edit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        <!-- end of content div  -->   
        </div>
    <!-- end of wrapper -->
    </div>


    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });

        $('#editmodal').on('show.bs.modal', function edit(event) {
             var div = $(event.relatedTarget);
             var modal = $(this);

             modal.find('#editid').attr("value",div.data('id'));
             modal.find('#editname').attr("value",div.data('name'));
             modal.find("#editcat").val(div.data('cat'));
             modal.find('#editprice').attr("value",div.data('price'));
         });
        
    </script>
</body>
</html>