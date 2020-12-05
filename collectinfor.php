<!DOCTYPE html>

<html lang="en">
     <head>
	 
         <title>People</title>
		 <meta charset="UTF-8">
		 <link rel="stylesheet" type="text/css" href="collectinfo.css"/>
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
					
						<form action="collecteddata.php" method="post" enctype="multipart/form-data">
				 
								Firstname:<br><input type="text" name="C_fname" required><br>
								Lastname:<br><input type="text" name="C_lname" required><br>
								Age:<br><input type="text" name="C_age" required><br>
								Gender:<br><input type="text" name="C_Gender" required><br>
								Password:<br><input type="password" name="C_Psswrd" required><br>
								
								<label for="fileSelect">Upload image:</label>
								<input type="file" name="photo" id="fileSelect">
								<p><strong>Note:</strong>.jpg, .jpeg, .gif, .png(max size<=5MB).</p>
								
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
