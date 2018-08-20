<!DOCTYPE html>
<html>
<head>
	<title>DelyAdmin | Contacts</title>
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
                <li> <a href="edit_menu.php"><i class="fa fa-edit fa-fw"></i>  Edit Menu</a></li>
                <li><a href="transactions.php"><i class="fa fa-hand-holding-usd fa-fw"></i>  Transactions</a></li>
                <li class="active" ><a href="contact.php"><i class="fa fa-phone fa-fw"></i>  Contact</a></li>
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
                <h5 style="color: #FF5722"><b><i class="fa fa-phone fa-fw"></i> Contacts</b></h5>
            </div>

            <!-- cards -->
            <div class="container" style="margin-top: 30px;">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card card-primary" >
                            <div class="card-header bg-primary" align="center" style="color: #fff">Call Office</div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <h5 style="color: #FF5722"><i class="fa fa-phone fa-fw fa-4x"></i></h5>
                                    </div>
                                    <div class="col-sm-8">
                                        <p>
                                            We’re ready to take your call!<br>
                                            <br>
                                            +254716352659<br>
                                            +254716352659<br>
                                            +254716352659<br>
                                            +254716352659<br>
                                            +254716352659
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="card card-primary">
                            <div class="card-header bg-primary" align="center" style="color: #fff">Email</div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <h5 style="color: #FF5722"><i class="fa fa-envelope fa-fw fa-4x"></i></h5>
                                    </div>
                                    <div class="col-sm-8" >
                                        <p>
                                            Send us an email and we will aim to reply to your query as soon as possible.<br>
                                            <br>
                                            Please provide full information about your query<br>
                                            <br>
                                            Email us at <a href="#" style="color: #FF5722">support@dely.co.ke.</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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