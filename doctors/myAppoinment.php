<?php if(!isset($_SESSION)){
	session_start();
	}  
?>

<?php include('header.php'); ?>






	<!-- this is for donor registraton -->
	<div class="dashboard" style="background-color:#fff;">

		<h1 class="text-center" style="background-color:#272327;color: #fff;padding: 5px;">Doctor Pannel</h1>
		<h3 class="text-center" style="background-color:#272327;color: #fff;padding: 5px;">My Appoinment</h3>
		
		
	</div>
		
			<div class="all_user" style="margin-top:0px; margin-left: 40px;">
				<?php 
					include('../config.php');

					$sql = " SELECT * FROM booking WHERE userid='".$_SESSION["userid"]."'";
					$result = mysqli_query($conn,$sql);
					$count = mysqli_num_rows($result);

					if($count>=1){
						echo "<table border='1' align='center' cellpadding='32'>
							<tr>
							<th>Booking ID</th>
								<th>Patient Name</th>
								<th>Contact</th>
								<th>E-mail</th>
								<th>address</th>
								<th>Date</th>
								<th>Time</th>
							</tr>";
						while($row=mysqli_fetch_array($result)){
								echo "<tr>";
								echo "<td>".$row['booking_id']."</td>";
								echo "<td>".$row['pname']."</td>";
								echo "<td>".$row['pcontact']."</td>";
								echo "<td>".$row['email']."</td>";
								echo "<td>".$row['address']."</td>";
								echo "<td>".$row['dates']."</td>";
								echo "<td>".$row['tyme']."</td>";
														?>
								<td><a href="cancel_booking.php?booking_id=<?php echo $row['booking_id'] ?>">Cancel</a></td>;
						<?php
								echo "</tr>";
						}
						echo "</table>";
					}
					else{
						print "<p align='center'>Sorry, No match found for your search result..!!!</p>";
					}

					?>
			</div>
		
	
	
	

	
 <?php include('../footer.php'); ?>


	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>


 
			



	
</body>
</html>
