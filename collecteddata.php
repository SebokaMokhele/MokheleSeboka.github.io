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
				
				$Query = "INSERT INTO Password (PName, Person_id, Passwrd) VALUES ('".$_POST["C_fname"]."',
																					(SELECT Person_id from Person WHERE P_fname = 'Nicholas'),
																					'".$_POST["C_Psswrd"]."')";
																					
				$Query1 = "INSERT INTO Person (P_fname, P_lname, Age, Gender) VALUES ('".$_POST["C_fname"]."',
																					  '".$_POST["C_lname"]."',
																					  '".$_POST["C_age"]."', 
																					  '".$_POST["C_Gender"]."')";
				
				$result = $link->query($Query);
				$result1 = $link->query($Query1);
				
				if($result==TRUE && $result1==TRUE)
				{
						?>
					
					<script>
						alert("Information collection succeeded!");
					</script>
					
					<?php
					header("Location:collectinfor.php");
				
					exit();
				}
				else
				{
					echo "error in ".$Query." <br> ".$link->error;
				}
				
				Mysqli_close($link);
			?>
		
	<body>
</html>
