<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	<title>Pro-langine</title>
	<link rel="favicon" href="assets/images/favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen">
	<link rel="stylesheet" type="text/css" href="assets/css/da-slider.css" />
	<link rel="stylesheet" href="assets/css/style.css">
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<?php
		include "nav.php";
		/*if(isset($_SESSION["username"]))
		{
			//$username=$_SESSION["username"];
		}
		else{ echo 'session not started';}*/

	?>

	<!-- Header -->
	<header id="head">
		<div class="container">
			<div class="banner-content">
				<div id="da-slider" class="da-slider">
					<div class="da-slide">
						<h2>Pro-Langine</h2>
						<p>Language learning platform</p>
						<div class="da-img"></div>
					</div>
					<div class="da-slide">
						<h2>Login to learn courses</h2>
						<p>Increase your knowledge</p>
						<div class="da-img"></div>
					</div>
					<div class="da-slide">
						<h2>Just Sign up</h2>
						<p>Easy and efficient way to learn</p>
						<div class="da-img"></div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- /Header -->

	<div id="courses">
		<div class="container">
			<h2>Available Courses</h2>
			<div class="row">
				<div class="col-md-4">
					<div class="featured-box">
					<a href="login.php">
						<i class="fa fa-cogs fa-2x"></i>
						<div class="text">
							<h3>HTML</h3>
							This FREE Tutorial will teach you how to design a webpage using HTML.Complete a series of hands-on practice and examination while writing real HTML code.
						</div>
					</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="featured-box">
					<a href="login.php">
						<i class="fa fa-leaf fa-2x"></i>
						<div class="text">
							<h3>CSS</h3>
							Our CSS Tutorial will teach you how to control the style & layout of websites.Complete a series of practice and examination while filling out actual CSS code.
						</div>
					</a>
					</div>
				</div>

		</div>
	</div>
	<?php
		include "footer.php";
	?>
<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="assets/js/modernizr-latest.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/jquery.cslider.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>
