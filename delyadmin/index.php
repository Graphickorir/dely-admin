<!DOCTYPE html>
<html>
<head>
	<title>DelyAdmin | Index</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/w3/w3.css">
	<link rel="stylesheet" href="css/w3/all.css">
	<link rel="stylesheet" href="css/w3/Ralewaycss.css">
	<link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="css/dely/dely.css">
	<script src="jquery/jquery.js"></script>
	<script src="js/bootstrap.mini.js"></script>
</head>
<style>
body,h5 {font-family: "Raleway", sans-serif}
h1{font-family: "css/font/Lobster.otf"}
body, html {height: 100%}
.bgimg {
	background-image: url('img/burger.jpg');
	min-height: 100%;
	background-position: center;
	background-size: cover;
}
</style>
<body >
	<!-- logo -->
	<div class="bgimg w3-display-container w3-text-white">
		<div class="w3-container" >
			<h1 style="margin-top: 30px"><b>DELY</b></h1>
		</div>

		<!-- error -->
		<?php 
		if (isset($_GET['msg'])) {
			if ($_GET['msg'] == 1) {
				?>
				<div align="center">
					<div class="alert alert-danger alert-dismissible" 
					style="width: 1000px;" align="center" id="alert">
					<strong>Ooops!</strong> Invalid Password or Restaurant
				</div>
			</div>
			<?php
		}
	}
	?>

	<!-- login form -->
	<div class="dely-center">
		<div class="card" style="width:400px" >
			<div class="card-header dely-theme" >
				<h4 class="card-title" align="center">LOGIN</h4>
			</div>
			<div class="card-body ">
				<form class="dely-text" method="POST" action="pages/config/restlogin.php">
					<div class="form-group input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text">
								<i class="fa fa-utensils" ></i>
							</span>
						</div>
						<input placeholder="Restaurant" type="text" 
						class="form-control" name="rest" required>
					</div>
					<div class="form-group input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text">
								<i class="fa fa-lock" ></i>
							</span>
						</div>
						<input placeholder="Password" type="Password" 
						class="form-control" name="restpass" required>
					</div>
					<div align="center">
						<button type="submit" 
						class="btn btn-outline-primary">Login</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- date -->
	<div class="w3-display-bottomright w3-container">
		<p class="w3-xlarge"><?php echo date("D.M.Y"); ?></p>
	</div>
</div>
</body>
<script type="text/javascript">
	$('#alert').fadeIn('slow').delay(3000).fadeOut('slow');
</script>
</html>