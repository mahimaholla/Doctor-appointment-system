 <?php if(!isset($_SESSION)){
	session_start();
	}  
?>

<?php include('header.php'); ?>





<div class="dashboard" style="background-color:#fff;">
		<h1 class="text-center" style="background-color:#272327;color: #fff;padding-top: 100px;">Admin Panel</h1>
	</div>
	<!-- this is for donor registraton -->
	<div class="dashboard" style="background-color:#fff;">
		<h3 class="text-center" style="background-color:#272327;color: #fff;padding: 5px;">Patient Who taken Appoinment</h3>
		
		
	</div>
		
			<div class="all_user" style="margin-top:0px; margin-left: 40px;">
				<?php 
					include('../config.php');
					

					$sql = " SELECT * FROM booking";
					$result = mysqli_query($conn,$sql);
					$count = mysqli_num_rows($result);

					if($count>=1){
						echo "<table border='1' align='center' cellpadding='32'>
							<tr>
								<tr><th>Booking ID</th>
								<th>Dr.Name</th>
								<th>Contact</th>
								<th>Expert at</th>
								<th>Patient</th>

								<th>PatientContact</th>
								<th>Date</th>
								<th>Time</th>
								<th>Action</th>
								
							</tr>";
						while($row=mysqli_fetch_array($result)){
								echo "<tr>";
								
								echo "<td>".$row['booking_id']."</td>";
								echo "<td>".$row['dname']."</td>";
								echo "<td>".$row['dcontact']."</td>";
								
								
								echo "<td>".$row['expertise']."</td>";
								echo "<td>".$row['pname']."</td>";
								echo "<td>".$row['pcontact']."</td>";
								
								echo "<td>".$row['dates']."</td>";
	 							echo "<td>".$row['tyme']."</td>";
							?>
								<td><a href="delapp.php?booking_id=<?php echo $row['booking_id'] ?>">Cancel</a></td>;
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
		
	
	
	

	

	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>


 
			



	
</body>
</html>
