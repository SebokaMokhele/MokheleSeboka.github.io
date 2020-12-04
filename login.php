<!DOCTYPE html>

<html lang="en">
     <head>
	 
         <title>People</title>
		 <meta charset="UTF-8">
		 <link rel="stylesheet" type="text/css" href="login.css" />
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
								<li><a class="active" href="#">login</a></li>
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
						<p>Login</p>
					</div>
					
					<div id="discription2">
					
						<form action="loginDeterminer.php" method="post">
				 
							Username:<br><input type="text" placeholder="Username/FirstName" name="Usrname" required><br><br>
							Password:<br><input type="password" placeholder="Password" name="Psswrd" required><br><br>
							
							<button type="submit" class="button">Login</button>
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
