<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Pro-Langine</title>
	<link rel="favicon" href="assets/images/favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen">
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
	?>


	<header id="head" class="secondary">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<h1>Examination</h1>
				</div>
			</div>
		</div>
	</header>
	<form method="post" action="">
<div class="row">
    <div class="col-md-6">
     <h1>1. What does CSS stand for?</h1>
  <div class="radio">
  <label><input type="radio" name="optradio" value="a">Creative Style Sheets</label>
</div>
<div class="radio">
  <label><input type="radio" name="optradio" value="b">Cascading Style Sheets</label>
</div>
<div class="radio">
  <label><input type="radio" name="optradio" value="c">Computer Style Sheets</label>
</div>
<br>
<button type="submit" class="btn btn-primary" name="submit">Submit</button>
<br>
</form>
<?php
if(isset($_POST['submit']))
	{
		$radval=$_POST['optradio'];
		if($radval=="b")
		{
			//echo 'true';
			echo '<a href="que12.php" class="btn">Next>></a>';
		}
		else
		{
			echo "<div class='alert alert-danger' role='alert'>Incorrect answer.Try Again !</div>";
		}
	}
	?>
	<br>
</div>
	</div> 
	<?php
		include "footer.php";
	?>
	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>
