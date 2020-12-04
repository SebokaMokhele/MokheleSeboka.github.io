<!DOCTYPE html>

<html lang="en">
     <head>
	 
         <title>People</title>
		 <meta charset="UTF-8">
		 <link rel="stylesheet" type="text/css" href="users.css"/>
		 <style> 
		 input{font-size: 110%}
		 .header1{
					font-size: 50px;
					font-weight: bold;
					color: white;}
		 .header2{
					font-size: 50px;
					font-weight: bold;
					color: white;}
		 </style>

     </head>
	    <body>
			<div class="wrapper">
				<div class="header">
				    <nav class="navbar">
					    <div class="headerlist">
							<ul>
								<li><a href="http://localhost/cyber/index.html">Home</a></li>
								<li><a href="http://localhost/cyber/login.php">login</a></li>
								<li><a class="active" href="#">Collect Information</a></li>
							</ul>
						</div>
					
						<div class = "headerlogo">
							<img class="logo" src="logoicon.jpg">Workers
						</div>
					</nav>
				</div>
				
				<div class="bgimg" style="background-image: url(crowd1.jpg)">
				</div>
				
				<div class="main">
					<div id="discription1">
						<p>collect personal information</p>
					</div>
					
					<div id="discription2">
					
						<form action="collecteddata.php" method="post">
				 
								Firstname:<br><input type="text" name="C_fname" required><br><br>
								Lastname:<br><input type="text" name="C_lname" required><br><br>
								Age:<br><input type="text" name="C_age" required><br><br>
								Gender:<br><input type="text" name="C_Gender" required><br><br>
								Password:<br><input type="password" name="C_Psswrd" required><br><br>
							
							<!-- <div class="popup">
							<div class="popcontainer">
							
								<h2>Successfully collection of information</h2>
								
								<button type="button" class="close-button"></button>
								
							</div>
							</div> -->
							
							<button type="submit" class="button">submit</button>
						</form>
						
					</div>
				</div>
			</div>
		</body>
  
    <footer style="background-color:#eeeeee">      
		<p> 
			© Copyright 2020, SystemUsers.™ Web Design by Seboka Mokhele<br>
			<a href="mailto:sebokamokhele@gmail.com"> 
				sebokamokhele@gmail.com
			</a>
		</p>
    </footer>
</html>
