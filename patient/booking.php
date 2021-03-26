   <?php if(!isset($_SESSION)){
	session_start();
	}  
?>
<?php include('header.php'); ?>
<?php include('uptomenu.php'); ?>

	
<!-- result -->
<?php 
	$doc_id = isset($_GET['doc_id'])?$_GET['doc_id']:"";
	$email=$_SESSION["email"];
	
 ?>
				<!-- fetching doctor info -->
					<?php 
					include('../config.php');
					

							$sql="SELECT * FROM doctor WHERE doc_id = $doc_id ";

							$result = $conn->query($sql);
							if ($result->num_rows > 0) {
							    // output data of each row
							    while($row  = $result->fetch_assoc()) {
							        $doc_id   = $row["doc_id"];
							        $name 	= $row["name"];
							        $expertise 	= $row["expertise"];
							        $contact 	= $row["contact"];
							        $fee = $row["fee"];
									 $userid = $row["userid"];
							    }
							}
							

							$conn->close();
					?>


					<!-- fetching doctor info -->

	<!-- 	booking info-->
		<div class="login" style="background-color:#fff;">
		<h1 class="text-center" style="background-color:#272327;color: #fff;padding-top: 100px;">Patient Panel</h1>
	<h3 class="text-center" style="background-color:#272327;color: #fff;">Book Appoinment</h3>
			<div class="formstyle" style="float: right;padding:20px;border: 1px solid lightgrey;margin-right:415px; margin-bottom:30px;background-color:#f3f3f8;color:#141313;">
				<form action="" method="post" class="text-center form-group" enctype="multipath/form-data">
					

					<label>
						Dr. Name: <input type="text" name="dname" value="<?php echo $name; ?>">
					</label><br><br>
 					
					<label>
						Dr.Category: <input type="text" name="expertise" value="<?php echo $expertise; ?>">
					</label><br><br>

					<label>
						Dr.Fee(Tk): <input type="text" name="fee" value="<?php echo $fee; ?>" >
					</label><br><br>
					<label>
						Pati Name: <input type="text" name="pname" value="">
					</label><br><br>

 					<label>
						 Contact: <input type="text" name="pcontact" value=""/>
					</label><br><br>
					<label>
						 E-mail: <input type="text" name="email" value="<?php echo $_SESSION["email"]; ?>">
					</label><br><br>
 					
					<label>
						 Address: <input type="text" name="address" value="">
					</label><br><br>
					<label>
						 Date: <input type="date" name="dates" value="">
					</label><br><br>
					<label>
						 Time: <select name="tyme" required>
										<option value="">-select-</option>
										<option value="11.00am">11.00am</option>
										<option value="03.00pm">03.00pm</option>
									</select>
					</label><br><br>
					<label>
						 Payment: <select name="payment" required>
										<option value="">-select-</option>
										<option value="Rocket">UPI</option>
										<option value="bKask">Cash</option>
									</select>
					</label><br><br>
					<label>
						  <input type="hidden" name="userid" value="<?php echo $userid; ?>">
					</label><br><br>
					
					<button name="submit" type="submit" style="padding-right:5px;border-radius:3px;margin-right:;">Confirm</button> 
					<a href="search_doctor.php"><button name="" type="" style="padding-right:5px;border-radius:3px;margin-right:-150px;">Cancel</button></a> <br>


				</form> <br><br>

			</div>
	
	
		</div>
				<!-- 	booking info-->
				
			<!-- confirming booking -->
					<?php

						include('../config.php');
						if(isset($_POST['submit'])){
							

						$sql = " INSERT INTO booking (dname,userid,dcontact,expertise,fee, pname,pcontact,email,address,dates,tyme,payment)
							VALUES ('" . $_POST["dname"] . "','" . $_POST["userid"] . "','" . $_POST["dcontact"] . "','" . $_POST["expertise"] . "', '" . $_POST["fee"] . "','" . $_POST["pname"] . "','". $_POST["pcontact"] . "','". $_POST["email"] . "','". $_POST["address"] . "','". $_POST["dates"] . "','". $_POST["tyme"] . "','". $_POST["payment"] . "' )";

							if ($conn->query($sql) === TRUE) {
							    echo "<script>alert('Your booking has been accepted!');</script>";
							   echo "<script>location.replace('view_booking.php');</script>";
							} else {
							    echo "<script>alert('There was an Error')<script>";
							}

							$conn->close();
						}
					?> 

				<!-- confirming booking -->

	<div class="" style="background-color: black;">
		<div class=""style="background-color: black;padding-left: 300px;padding-right:300px;padding-top:20px;padding-bottom:20px;  ">
			<article style="background-color: black;">
			<h3 style="font-weight: bold;font-family:inherit;color: black">Finds Doctors from anywhere anytime!</h3>
				<p class="text-justify" style="color: black">Busy to come and book appointment?access our website to book appointments from anywhere any time.</p><br>
				<p class="text-justify" style="color: black">You live some where else? search nearby clinincs to book appointment</p><br>
				<p class="text-justify" style="color: black">Always available: Your customers can make an appointment 24/7
				Always available: Your customers can make an appointment 24/7</p>
				<p class="text-justify" style="color: black">Easy to use: Nothing to install, no servers or backups to worry about</p>

			</article>
		</div><div class="" style="background-color: black;">
		<div class=""style="background-color: black;padding-left: 300px;padding-right:300px;padding-top:20px;padding-bottom:20px;  ">
			<article style="background-color: black;">
			<h3 style="font-weight: bold;font-family:inherit;color: black">Finds Doctors from anywhere anytime!</h3>
				<p class="text-justify" style="color: black">Busy to come and book appointment?access our website to book appointments from anywhere any time.</p><br>
				<p class="text-justify" style="color: black">You live some where else? search nearby clinincs to book appointment</p><br>
				<p class="text-justify" style="color: black">Always available: Your customers can make an appointment 24/7
				Always available: Your customers can make an appointment 24/7</p>
				<p class="text-justify" style="color: black">Easy to use: Nothing to install, no servers or backups to worry about</p>

			</article>
		</div>
	
 <?php include('footer.php'); ?>


	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>


 


	
</body>
</html>
