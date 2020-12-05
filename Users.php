<!DOCTYPE html>

<html lang="en">
     <head>
	 
         <title>People</title>
		 <meta charset="UTF-8" name="viewpoint" content="width=device-width, initial-scale=1">
		 <link rel="stylesheet" type="text/css" href="users.css" />
		 <style> 
		 
		 .my-custom-scrollbar
		 {
			 position:absolute;
			 height: 100%;
			 overflow: auto;
		 }
		 .table-wrapper-scroll-y
		 {
			 display: block;
			 margin-bottom:60%
		 }
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
					width: 100%;
					height:100%;
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
					
					<div class="table-wrapper-scroll-y my-custom-scrollbar" id="discription2"">
							
							<table class="table table-bordered table-stripped mb-0">
								<thead>
									<tr>
										<th >Photo</th>
										<th >First Name</th>
										<th >Download link</th>
									</tr>
								</thead>
								
								<tbody>
								
									<form>
										<?php 
											$i=0;
											
											include_once('dbconn.php'); 
																	
											$Query1 = "SELECT * FROM Picture";
																	
											$result1 = $link->query($Query1);
																	
											if($result1->num_rows > 0)
											{
												while($row1 = $result1->fetch_assoc())
												{
													?>
													<tr>
														<td>
															<div class="img">
																<label>
																
																	<?php 
																		include_once('dbconn.php'); 
																		
																		$Query = "SELECT * FROM Picture";
																		
																		$result = $link->query($Query);
																		
																		if($result->num_rows > 0)
																		{
																			$m=0;
																			while($row = $result->fetch_assoc())
																			{
																				if($i==$m)
																				{
																					echo  "<img src ='{$row['Pic_dir']}' width='23%' height:='23%'>";
																					break;
																				}
																				$m++;
																			}
																		}
																	?>
																
																</label>
															</div>
														</td>
														
														<td>
															<div class="ownName">
																<label for="Name">
																
																	<?php 
																		 
																
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
															<div class="download_Link" >
															
																<p><a href="http://localhost/cyber/Download.php" class="dwnload">Download<a></p>
															
															</div>
															
															
														</td>
													</tr>
											
													<?php 
											
													$i++;
												}
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
