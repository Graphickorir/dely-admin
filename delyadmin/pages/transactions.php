<!DOCTYPE html>
<html>
<head>
    <title>DelyAdmin | Transactions</title>
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
                <li><a href="edit_menu.php"><i class="fa fa-edit fa-fw"></i>  Edit Menu</a></li>
                <li class="active" ><a href="transactions.php"><i class="fa fa-hand-holding-usd fa-fw"></i>  Transactions</a></li>
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
                <h5 style="color: #FF5722"><b><i class="fa fa-hand-holding-usd fa-fw"></i> Transactions</b></h5>
            </div>

            <!-- menu table -->
            <div class="container" style="margin-top: 50px;" align="center">
                <?php
                require 'config/delydbcon.php';

                $stmt1 = $con->prepare("SELECT SUM(delyitems.Item_price) FROM delyorders INNER JOIN delyitems ON delyorders.Item_id = delyitems.Item_id WHERE Dely = '1' AND Part_id ='$partid' ");
                $stmt1->execute();
                $stmt1->bind_result($sum);
                while ($stmt1->fetch()) {
                   echo "
                   <div class='container'>
                        <div class='row'>
                            <div class='col-sm-6' align='center' >
                                <h4 style='color: #FF5722' >All ".$_SESSION['part']." Delivered Items</h4>
                            </div>
                            <div class='col-sm-6' align='center' >
                                <h4 style='color: #FF5722' >Total: Ksh ".$sum."</h4>
                            </div>
                        </div>
                    </div>";
                }
                $partid = $_SESSION['partid'];
                $stmt = $con->prepare("SELECT delyorders.Order_num,delyusers.Name,delyitems.Item_name,delyitems.Item_price,delyorders.Order_date FROM delyorders INNER JOIN delyusers ON delyorders.User_id = delyusers.Id INNER JOIN delyitems ON delyorders.Item_id = delyitems.Item_id WHERE Dely = '1' AND Part_id ='$partid' ");
                $stmt->execute();
                $stmt->bind_result($num,$name,$item,$price,$date);
                echo"<table class='table table-bordered' style='margin: 0 auto; width: 90%;'>
                    <thead class='text-center'>
                        <tr>
                            <th>Order NO</th>
                            <th>Customer</th>
                            <th>Item</th>
                            <th>Item Price</th>
                            <th>Date</th>
                        </tr>
                    </thead>";
                $total = 0;
                while ($stmt->fetch()) {
                    echo "<tbody class='text-center'>
                            <tr>
                                <td>".$num."</td>
                                <td>".$name."</td>
                                <td>".$item."</td>
                                <td>Ksh ".$price."</td>
                                <td>".$date."</td>
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