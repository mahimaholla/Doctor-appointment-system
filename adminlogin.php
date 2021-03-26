 <?php session_start();  ?>
<?php include('header.php'); ?>


<div class="dashboard" style="background-color:#fff;">
		<h1 class="text-center" style="background-color:#272327;color: #fff;padding-top: 50px;">Admin Login</h1>
	</div>


	<!-- this is for donor registraton -->
	<div class="formstyle" style="float: right;padding:25px;border: 1px solid lightgrey;margin-right:47x0px; margin-bottom:30px;background-color: #101011;color:#d4530d;">
		<form enctype="multipart/form-data" action=""  method="post" class="text-center" style="margin-left: 20px">
			 <div class="col-md-12" style="background-color: white;padding-top: 20px;">
				  	
				<form action="" method="post" class="text-center form-group">
					<label>Password 
						 <input type="password" name="password"  placeholder="password" required>
					</label><br><br>
						<label>Username<input type="text" name="username"  placeholder="username" required></label>
					
					<br><br>
					<button name="submit" type="submit" style="margin-left: -26px;width: 85px;border-radius: 3px;">Login</button> <br>

					 <br>
</div>	<!-- col-md-12 -->


				</form>
			</div>




	</div>

					<!-- login validation -->
			<?php 
					$_SESSION['admin']="";
							
							include('config.php');
							if(isset($_POST["submit"])){

 
							$sql= "SELECT * FROM users WHERE username= '" . $_POST["username"]."' AND password= '" . $_POST["password"]."'";

							$result = $conn->query($sql);

									if ($result->num_rows > 0) {
											$_SESSION["email"]= $_POST["email"];
											
											$_SESSION['patient']= "yes";
										    echo "<script>location.replace('admin/dashboard.php');</script>";
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
	
 <?php include('footer.php'); ?>


	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>


 
			



	
</body>
</html>

