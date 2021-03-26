
	
   <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Appointment System</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/style.css">
	<style>
		.error {color: #FF0000;}
		body {margin:0;}


body {margin:0;}




	</style>
</head>
<body>


<?php
		if($_SESSION['adminstatus'] == ""){
			header("location:doctorlogin.php");
		}
		
		   

	 ?>


	<div class="container-fluid">
		<div class="header_top" > 
			<!-- <a href="index.php"><img src="img/dash2.jpg" alt="logo.png img"></a> -->

			<div class="navbar">
			
				<span  style="font-size:30px;color:#fff;font-weight:bolder;margin-left:15px;">Appoinment System</span>

				<a href="../patient/logout.php">Logout</a>
				<a href="myDetails.php">My Details</a>
				<a href="myCustomer.php">Customer Details</a>
				<a href="myAppoinment.php">My Appoinment</a>

				<a href="myAppoinment.php">Change Password</a>
</div>



</div>
</div>

</body>
				 
			
	</html>


	
