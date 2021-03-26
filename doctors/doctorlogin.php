<?php session_start();  ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>medical management system</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/style.css">
	<style>
		.error {color: #FF0000;}
	</style>
</head>
<body> 



			
			
		</div>

	
			<?php include('dheader.php'); ?>
			
		
	
	




<div class="dashboard" style="background-color:#fff;">
		<h3 class="text-center" style="background-color:#272327;color: #fff;padding: 5px;">Doctor login</h3>

	<!-- this is for donor registraton -->
	<div class="formstyle" style="float: right;padding:25px;border: 1px solid lightgrey;margin-right:480px; margin-bottom:30px;background-color: #101011;color:#d4530d;;">
		<form enctype="multipart/form-data" action=""  method="post" class="text-center" style="margin-left: 20px">
			 <div class="col-md-12" style="background-color: white;padding-top: 20px;">
				<form action="" method="post" class="text-center" style="background-color: white;padding-top: 20px;">
					<label>UserID
						<input type="text" name="userid"  placeholder="userid" required>
					</label><br><br>
					<label>Password 
						<input type="password" name="password"  placeholder="password">
					</label><br><br>
					<button name="submit" type="submit" style="margin-left:127px;padding: 5px 25px; border-radius: 4px;">Login</button> <br>

					


					<!-- login validation -->
			<?php 
							$_SESSION['adminstatus']="";
							
							include('../config.php');
							if(isset($_POST["submit"])){

							$sql= "SELECT * FROM doctor WHERE userid= '" . $_POST["userid"]."' AND password= '" . $_POST["password"]."'";

							$result = $conn->query($sql);

									if ($result->num_rows > 0) {
											$_SESSION["userid"]= $_POST["userid"];
											// $_SESSION["type"]=$result[2];
											$_SESSION['adminstatus']= "yes";
										    echo "<script>location.replace('myDetails.php');</script>";
												// echo "u are supposed to redirect to ur profile";
										} else {
										    echo "<span style='color:red;'>Invalid username or password</span>";
										}
						$conn->close();		
					}
					
 			?>
		<!-- login validation End-->


				</form> <br>&nbsp;&nbsp;&nbsp;
				
				<br>

				
		
				
			
		
	</div>
	
	
</div>
	
<?php include('../footer.php'); ?>

	
</div><!--  containerFluid Ends -->




<script src="../js/bootstrap.min.js"></script>


 
			



	
</body>
</html>

