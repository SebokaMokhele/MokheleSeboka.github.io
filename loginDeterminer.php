<!DOCTYPE html>

<html lang="en">
     <head>
	 
         <title>People</title>
		 <meta charset="UTF-8">
		 <link rel="stylesheet" type="text/css" href="login.css" />
		 
     </head>

	    <body>
		 

		<?php
				
				include_once('dbconn.php'); 
				
				$Query = "SELECT Pname, Passwrd FROM Password";
				
				$result = $link->query($Query);
				
				if($result->num_rows>0)
				{
					while($row = $result->fetch_row())
					{
						if($row[0] == $_POST["Usrname"] && $row[1] == $_POST["Psswrd"])
						{
							header("Location:Users.php");
							exit();
						}
						else
						{
							header("Location:login.php");
						}
					}
				}
				else
				{
					echo "error in ".$Query." <br> ".$link->error;
				}
				
				Mysqli_close($link);
		?>
		
		
		
	<body>
</html>
