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
		<h3 class="text-center" style="background-color:#272327;color: #fff;padding: 5px;">Customer</h3>
		
		
	</div>
		
			<div class="all_user" style="margin-top:0px; margin-left: 40px;">
				<?php 
					include('../config.php');
					$sql = " SELECT * FROM feedback";
					$result = mysqli_query($conn,$sql);
					$count = mysqli_num_rows($result);

					if($count>=1){
						echo "<table border='1' align='center' cellpadding='32'>
							<tr>
								<th>ID</th>
								<th>FeedBack</th>
								<th>Action</th>
								
							</tr>";
						while($row=mysqli_fetch_array($result)){
								echo "<tr>";
								echo "<td>".$row['id']."</td>";
								echo "<td>".$row['feedback']."</td>";


								?>

								<td><a href="delfed.php?id=<?php echo $row['id'] ?>">Delete</a></td>
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
