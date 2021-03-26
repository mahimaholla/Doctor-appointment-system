   <!-- footer section --> 
   <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: #333332;
   color: white;
   text-align: center;
}
html, body {
margin:0;
padding:0;
height:100%;
}
#wrapper {
height: 100%;
position:relative;
}
#container {
margin: 1 auto;
width: 100%;
padding-top: 10px; /* size of header */
padding-bottom: 100px; /* size of footer */
height: 100%;
}
#column-left {
width: 20%;
min-height: 100%;
float: left;
}
#column-right {
width: 20%;
min-height: 100%;
float: right;
}
#content {
float: left;
width: 60%;
min-height: 100%;
}
</style>
</head>
<body>
<footer>

<div class="footer">
	<div id="wrapper">
<div id="container">
    <div id="column-left"><p>Category</p> <hr>
					<ul>
						<li><a style="color: yellow;" href="patient_login.php">Search for Doctors</a></li>
						<li><a style="color: yellow;"href="patient_login.php">Contact with Doctors</a></li>
						
					</ul></div>
    <div id="content"><p>Contact</p> <hr>
						<p>Name here <br>
							mail@gmail.com <br>
							Cell: 973869824232</p>
							<span style="color: yellow;font-size: 15px">&copy;<?php echo date('Y'); ?>-All Rights Reserved</span>
							<br>
							<hr>
					</div>

    <div id="column-right"><p>Link With</p> <hr>
						<a href="https://facebook.com" ><img src="img/fb-free.png" alt="facebok" ></a>
						<a href="https://gmail.com"><img src="img/gogle-plud-free.png" alt="google-plus"></a>
						<a href="https://twitter.com"><img src="img/twitter.png" alt="twitter"></a></div>
</div>
</div>
</div>
<div><hr></div>
</footer>
</body>
</html> 

			
			
					
						
					
				

			

		<!-- footer section Ends--> 
