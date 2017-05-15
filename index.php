<?php
	$con= mysqli_connect("localhost", "root" , "my_user" , "ispproject") or die("Couldn't connect to database! :(");
?>

<html>
<head>
	<title>MBM Fee Structure</title>
	<link rel="stylesheet" type="text/css" href="newstyle.css">
	<meta name="viewport" content="initial-scale=1.0,user-scalable=no,maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css"/>
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
</head>
<body>
	<?php  
		include("header.php");
	?>
	<!-- slider code -->

	<div class="slider1 slider4">
	<div id="myCarousel" class="carousel slide  slider4" data-ride="carousel">
     	<div class="carousel-inner slider4 img-responsive">
            <div class="item "><img  class="img-responsive slider4"src="images/parking.jpg"></div>
            <div class="item"><img  class="img-responsive slider4"
             src="images/gate.jpg"></div>
           
            <div class="item"><img  class="img-responsive slider4" src="images/classroom.jpg"></div>
             <div class="item active"><img  class="img-responsive slider4" src="images/header.jpg"></div>
     	</div>
     </div>
</div>


	
	<div class="content" style="text-align: center;">
		<h1>Welcome to Fee Portal</h1><br>
		<a href="enquiry.php">INQUIRY</a><br><br>
		<a href="form.php">REGISTRATION</a>
	</div>
	<?php  
		include("footer.php");
	?>

<script type="text/javascript" src="js/jquery-2.1.1.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
	
</body>
</html>