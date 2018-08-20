<!DOCTYPE html>
<html>
<head>
	<title>DelyAdmin | Home</title>
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
                <li class="active" ><a href="home.php"><i class="fa fa-home fa-fw"></i>  Home</a></li>
                <li><a href="deliveries.php"><i class="fa fa-truck fa-fw"></i>  Deliveries</a></li>
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
                <h5 style="color: #FF5722"><b><i class="fa fa-tachometer-alt fa-fw"></i> My Dashboard</b></h5>
            </div>


            <!-- cards -->
            <div class="row" style="height: 200px; padding: 10px; margin-top: 30px;">
                <div class="ziko col-sm-4" >
                    <div class="panel panel-default" style="background: grey;">
                        <div class="panel-header" align="center" style="color: #fff;"><h4 ><b> Users</b></h4></div>
                        <div class="panel-body" align="center" style="color: #FF5722;"><i class="fa fa-users fa-7x"></i></div>
                        <?php 
                            require 'config/delydbcon.php';
                            $partid = $_SESSION['partid'];
                            $stmt = $con->prepare("SELECT * FROM delyusers");
                            $stmt->execute();
                            $stmt->store_result();
                            $num = $stmt->num_rows();
                            echo "<div class='panel-footer' align='center' style='color: #fff;'><h4 ><b> ".$num."</b></h4></div>";
                        ?>
                    </div>
                </div>
                <div class="ziko col-sm-4" >
                    <div class="panel panel-default" style="background: grey;">
                        <div class="panel-header" align="center" style="color: #fff;"><h4 ><b> User Rating</b></h4></div>
                        <div class="panel-body" align="center" style="color: #FF5722;"><i class="fa fa-star fa-7x"></i></div>
                        <?php 
                            require 'config/delydbcon.php';
                            $partid = $_SESSION['partid'];
                            $stmt = $con->prepare("SELECT AVG(Rating) FROM partrating WHERE Partner_id='$partid' ");
                            $stmt->execute();
                            $stmt->bind_result($rating);
                            while ($stmt->fetch()) {
                                echo "<div class='panel-footer' align='center' style='color: #fff;'><h4 ><b> ".$rating."</b></h4></div>";
                            }
                        ?>
                    </div>
                </div>
                <div class="ziko col-sm-4" >
                    <div class="panel panel-default" style="background: grey;" >
                        <div class="panel-header" align="center" style="color: #fff;"><h4 ><b> Successful Deliveries</b></h4></div>
                        <div class="panel-body" align="center" style="color: #FF5722;"><i class="fa fa-thumbs-up fa-7x"></i></div>
                        <?php 
                            require 'config/delydbcon.php';
                            $partid = $_SESSION['partid'];
                            $stmt = $con->prepare("SELECT * FROM delyorders WHERE Dely= '1' AND Part_id= '$partid' ");
                            $stmt->execute();
                            $stmt->store_result();
                            $num = $stmt->num_rows();
                            echo "<div class='panel-footer' align='center' style='color: #fff;'><h4 ><b> ".$num."</b></h4></div>";
                        ?>
                    </div>
                </div>
            </div>

            <div class="container" style="margin-top: 50px;">
                <div>
                    <h4 style="color: #FF5722">Recent Orders</h4>
                    <?php
                    require 'config/delydbcon.php';
                    $partid = $_SESSION['partid'];
                    $stmt = $con->prepare("SELECT delyorders.Order_num,delyusers.Name,delyitems.Item_name,delyorders.Order_date,delyorders.Dely FROM delyorders INNER JOIN delyusers ON delyorders.User_id = delyusers.Id INNER JOIN delyitems ON delyorders.Item_id = delyitems.Item_id WHERE Part_id = '$partid' LIMIT 5");
                    $stmt->execute();
                    $stmt->bind_result($num,$name,$item,$date,$dely);
                    echo"<table class='table table-hover table-striped table-bordered'>
                    <thead>
                    <tr>
                    <th>Order Number</th>
                    <th>User Name</th>
                    <th>Item</th>
                    <th>Date</th>
                    <th class='text-center'>Delivered</th>
                    </tr>
                    </thead>";
                    while ($stmt->fetch()) {
                        $check = "Null";
                        if ($dely == 1) {
                            $check = "fa fa-check";
                            $color = "green";
                        }elseif ($dely == 0) {
                            $check = "fa fa-times";
                            $color = "red";
                        }
                        echo "<tbody>
                        <tr>
                        <td>".$num."</td>
                        <td>".$name."</td>
                        <td>".$item."</td>
                        <td>".$date."</td>
                        <td class='text-center' style='color:".$color.";'><i class='".$check."'></i></td>
                        </tr>
                        </tbody>";
                    }
                    echo "</table>";
                    ?>
                </div>
                <div>
                    <h4 style="color: #FF5722">Recent Rating</h4>
                    <?php
                    require 'config/delydbcon.php';
                    $partid = $_SESSION['partid'];
                    $stmt = $con->prepare("SELECT delyusers.Id,delyusers.Name,partrating.Rating FROM partrating INNER JOIN delyusers ON partrating.User_id = delyusers.Id WHERE Partner_id = '$partid' LIMIT 5");
                    $stmt->execute();
                    $stmt->bind_result($id,$name,$rating);
                    $stmt->store_result();
                    echo"<table class='table table-hover table-striped table-bordered text-center'>
                    <thead>
                    <tr>
                        <th>User's Name</th>
                        <th>Rating</th>
                        <th>Completed Orders</th>
                    </tr>
                    </thead>";
                    while ($stmt->fetch()) {
                        $sql = $con->prepare("SELECT * from delyorders WHERE User_id= '$id' AND Part_id= '$partid' ");
                        $sql->execute();
                        $sql->store_result();
                        $num = $sql->num_rows();
                        echo "<tbody>
                        <tr>
                            <td>".$name."</td>
                            <td>".$rating."</td>
                            <td>".$num."</td>
                        </tr>
                        </tbody>";
                    }
                    echo "</table>";
                    ?>
                </div>
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