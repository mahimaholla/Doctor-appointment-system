  <?php if(!isset($_SESSION)){
	session_start();
	}  
?>
<?php include('header.php'); ?>
<?php include('uptomenu.php'); ?>

	
<!-- result -->
<?php 
	$booking_id = isset($_GET['booking_id'])?$_GET['booking_id']:"";
	$email=$_SESSION["email"];
	 
 ?>
				<!-- fetching doctor info -->
					<?php 
					include('../config.php');
					

							$sql="SELECT * FROM booking WHERE booking_id = $booking_id ";

							$result = $conn->query($sql);
							if ($result->num_rows > 0) {
							    // output data of each row
							    while($row  = $result->fetch_assoc()) {
							    	$booking_id = $row["booking_id"];
							        $dname   = $row["dname"];
							        $dates 	= $row["dates"];
							        $tyme	= $row["tyme"];
							    }
							}
							

							$conn->close();
					?>


					<!-- fetching doctor info -->

	<!-- 	booking info-->
		
				<!-- 	booking info-->
				
			<!-- confirming booking -->
					<?php

						include('../config.php');
							

						$sql = " DELETE from booking where booking_id =$booking_id";

							if ($conn->query($sql) === TRUE) {
							    echo "<script>alert('Your booking has been canceled!');</script>";
							   echo "<script>location.replace('myAppoinment.php');</script>";
							} else {
							    echo "<script>alert('There was an Error')<script>";
							}

							$conn->close();
						
					?> 

				<!-- confirming booking -->

	
	
 <?php include('footer.php'); ?>


	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>


 


	
</body>
</html>
