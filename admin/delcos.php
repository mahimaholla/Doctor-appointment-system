   <?php if(!isset($_SESSION)){ 
	session_start();
	}  
?>
<?php include('header.php'); ?>
  
	
<!-- result -->
<?php  
	$id = isset($_GET['id'])?$_GET['id']:"";
	
 ?>
				<!-- fetching doctor info -->
					<?php 
					include('../config.php');
					

			  				$sql="SELECT * FROM patient WHERE id = $id ";

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
						Dr. Name: <input type="text" name="id" value="<?php echo $id; ?>">
					</label><br><br>
					

					<?php

						include('config.php');
							

						$sql = " DELETE from patient where id = $id ";

							if ($conn->query($sql) === TRUE) {
							    echo "<script>alert('Your booking has been canceled!');</script>";
							   echo "<script>location.replace('viewCustomer.php');</script>";
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
