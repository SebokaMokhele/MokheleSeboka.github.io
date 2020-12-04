<!DOCTYPE html>

<html lang="en">
     <head>
	 
         <title>People</title>
		 <meta charset="UTF-8">
		 <link rel="stylesheet" type="text/css" href="users.css" />
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
					
		table, th, td
				{
					width: 80;
					margin: auto;
					border: 1px solid white;
					border-collapse: collapse;
					text-align: center;
					font-size: 15px;
					table-layout: fixed;
					background: blue;
					opacity: 0.5;
					color: white;
					margin-top: 10px;
				}
				th, td
				{
					padding: 10px;
					opacity: 0.99;
				}
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
						<p>People</p>
					</div>
					
					<div id="discription2">
					
							<table>
								<thead>
									<tr>
										<th>Photo</th>
										<th>First Name</th>
										<th>Download link</th>
									</tr>
								</thead>
								
								<tbody>
								
									<form>
										<?php 
											$i=0;
											while($i<5)
											{
												?>
												<tr>
													<td>
														<div class="img">
															<label>picture here</label>
														</div>
													</td>
													
													<td>
														<div class="ownName">
															<label for="Name">
															
																<?php 
																	include_once('dbconn.php'); 
															
																	$Query = "SELECT * FROM Person";
																	
																	$result = $link->query($Query);
																	
																	if($result->num_rows > 0)
																	{
																		$n=0;
																		while($row = mysqli_fetch_array($result))
																		{
																			if($i==$n)
																			{
																				echo  $row['P_fname'];
																				break;
																			}
																			$n++;
																		}
																	}
																?>
															</label>
														</div>
													</td>
													<td>
														<div class="download_Link">
															<label>Download link</label>
														</div>
													</td>
												</tr>
										
												<?php 
										
												$i++;
											}
											mysqli_close($link);
										?>
									</form>
								</tbody>
							</table>
						
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
