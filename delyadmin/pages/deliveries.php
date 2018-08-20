<!DOCTYPE html>
<html>
<head>
	<title>DelyAdmin | Deliveries</title>
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
                <li class="active" ><a href="deliveries.php"><i class="fa fa-truck fa-fw"></i>  Deliveries</a></li>
                <li> <a href="edit_menu.php"><i class="fa fa-edit fa-fw"></i>  Edit Menu</a></li>
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
                <h5 style="color: #FF5722"><b><i class="fa fa-truck fa-fw"></i> Deliveries</b></h5>
            </div>

            <!-- cards -->
            <div class="container" style="margin-top: 50px;" align="center">
                <h4 style="color: #FF5722">All Orders</h4>
                <hr>
                <?php
                require 'config/delydbcon.php';
                $partid = $_SESSION['partid'];
                $stmt = $con->prepare("SELECT delyorders.Order_id,delyorders.Order_num,delyusers.Name,delycompanies.Company,delycompanies.Address,delyitems.Item_name,delyorders.Order_date,delyorders.Dely FROM delyorders INNER JOIN delyusers ON delyorders.User_id = delyusers.Id INNER JOIN delyitems ON delyorders.Item_id = delyitems.Item_id INNER JOIN delycompanies ON delyorders.Address = delycompanies.Id_Co WHERE Part_id = '$partid' AND Dely ='0' ");
                $stmt->execute();
                $stmt->bind_result($oid,$num,$name,$coname,$address,$item,$date,$dely);
                echo"<div class='row'>
                <div class='col-sm-6'>
                <table class='table table-borderless' style='margin: 0 auto; width: 90%;'>
                    <thead class='text-center'>
                        <tr>
                            <th>Not yet Delivered</th>
                        </tr>
                    </thead>";
                while ($stmt->fetch()) {
                    echo "<tbody class='text-center'>
                            <tr>
                                <td>
                                    <div class='card'>
                                        <div class='card-header bg-danger' style='color: #fff;'>
                                            <div><b>Order No: ".$num."</b></div>
                                        </div>
                                            <div class='card-body' align='left'>
                                            <div class='row'>
                                                <div class='col-sm-8'>
                                                    <div><b>Date:</b>  ".$date."</div>
                                                    <div><b>Name:</b>  ".$name."</div>
                                                </div>
                                                <div class='col-sm-4'>
                                                <form method='POST' action='config/delivered.php'>
                                                    <input type='hidden' name='coid' value='".$oid."'/> 
                                                    <button type='submit' class='btn btn-outline-success'>Delivered</button>
                                                </form>
                                                </div>
                                                <div class='col-sm-12'>
                                                    <div><b>Company:</b>  ".$coname."</div>
                                                    <div><b>Address:</b>  ".$address."</div>
                                                    <div><b>Item:</b>  ".$item."</div>
                                                </div>
                                            </div>
                                            </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>";
                }
                echo "</table>
                </div>";

               $stmt1 = $con->prepare("SELECT delyorders.Order_id,delyorders.Order_num,delyusers.Name,delycompanies.Company,delycompanies.Address,delyitems.Item_name,delyorders.Order_date,delyorders.Dely FROM delyorders INNER JOIN delyusers ON delyorders.User_id = delyusers.Id INNER JOIN delyitems ON delyorders.Item_id = delyitems.Item_id INNER JOIN delycompanies ON delyorders.Address = delycompanies.Id_Co WHERE Part_id = '$partid' AND Dely ='1' ");
                $stmt1->execute();
                $stmt1->bind_result($oid,$num,$name,$coname,$address,$item,$date,$dely);
                echo"
                <div class='col-sm-6'>
                <table class='table table-borderless' style='margin: 0 auto; width: 90%;'>
                    <thead class='text-center'>
                        <tr>
                            <th>Successfully Delivered</th>
                        </tr>
                    </thead>";
                while ($stmt1->fetch()) {
                    echo "<tbody class='text-center'>
                            <tr>
                                <td>
                                    <div class='card'>
                                        <div class='card-header bg-success' style='color: #fff;'>
                                            <div><b>Order No: ".$num."</b></div>
                                        </div>
                                            <div class='card-body' align='left'>
                                                <div><b>Date:</b>  ".$date."</div>
                                                <div><b>Name:</b>  ".$name."</div>
                                                <div><b>Company:</b>  ".$coname."</div>
                                                <div><b>Address:</b>  ".$address."</div>
                                                <div><b>Item:</b>  ".$item."</div>
                                            </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>";
                }
                echo "</table>
                </div>";
                ?>
            </div>

        </div>
    </div>


    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>
</html>