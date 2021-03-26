  <?php if(!isset($_SESSION)){ 
	session_start();
	}  
?>
<?php include('header.php'); ?>
 
	
<!-- result -->
<?php 
	$userid = isset($_GET['userid'])?$_GET['userid']:"";
	
 ?>
				<!-- fetching doctor info -->
					<?php 
					include('../config.php');
					

			  				$sql="SELECT * FROM doctor WHERE userid = $userid ";

							$result = $conn->query($sql);
							if ($result->num_rows > 0) {
							    // output data of each row
							    while($row  = $result->fetch_assoc()) {
							    	$userid = $row["userid"];
							       
							    }
							}
							

							$conn->close();
					?>
<label>
						Dr. Name: <input type="text" name="userid" value="<?php echo $userid; ?>">
					</label><br><br>
					

					<?php

						include('config.php');
							

						$sql = " DELETE from doctor where userid = $userid ";

							if ($conn->query($sql) === TRUE) {
							    echo "<script>alert('Your booking has been canceled!');</script>";
							   echo "<script>location.replace('viewDoctor.php');</script>";
							} else {
							    echo "<script>alert('There was an Error')<script>";
							}

							$conn->close();
						
					?> 

				<!-- confirming booking -->

	
	

	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>


 


	
</body>
</html>
