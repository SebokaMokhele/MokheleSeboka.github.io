<!DOCTYPE html>

<html lang="en">
     <head>
	 
         <title>People</title>
		 <meta charset="UTF-8">
		 <link rel="stylesheet" type="text/css" href="login.css" />
		 
     </head>

	    <body>

			<?php
				//collect the picture and store into my files
					if($_SERVER["REQUEST_METHOD"] == "POST")
					{
						if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0)
						{
							$allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
							
							$filename = $_FILES["photo"]["name"];
							$filetype = $_FILES["photo"]["type"];
							$filesize = $_FILES["photo"]["size"];
					
							$ext = pathinfo($filename, PATHINFO_EXTENSION);
							if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
						
							$maxsize = 5 * 1024 * 1024;
							if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
						
							if(in_array($filetype, $allowed))
							{
				
								if(file_exists("Uploaded/" . $filename))
								{
									echo $filename . " is already exists.";
								}
								else
								{
									$img_dir = "Uploaded/" . $filename;
									//image is into uploaded folder uploaded
									move_uploaded_file($_FILES["photo"]["tmp_name"], "Uploaded/" . $filename);
									echo "Your file was uploaded successfully.";
									
									//insert details into databases;
									include_once('dbconn.php'); 
									
									$Query = "INSERT INTO Password (PName, Person_id, Passwrd) VALUES ('".$_POST["C_fname"]."',
																										(SELECT Person_id from Person WHERE P_fname = 'Nicholas'),
																										'".$_POST["C_Psswrd"]."')";
																										
									$Query1 = "INSERT INTO Person (P_fname, P_lname, Age, Gender) VALUES ('".$_POST["C_fname"]."',
																										  '".$_POST["C_lname"]."',
																										  '".$_POST["C_age"]."', 
																										  '".$_POST["C_Gender"]."')";
																										  
									$Query2 = "INSERT INTO Picture (Person_id, Pic_dir) VALUES ((SELECT Person_id from Person WHERE P_fname = '".$_POST["C_fname"]."'),
																										'".$img_dir."')";
									
									$result = $link->query($Query);
									$result1 = $link->query($Query1);
									$result2 = $link->query($Query2);
									
									if($result==TRUE && $result1==TRUE && $result2==TRUE)
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
								
									
								} 
							} 
							else
							{
								echo "Error: There was a problem uploading your file. Please try again."; 
							}
						} 
						else
						{
							echo "Error: " . $_FILES["photo"]["error"];
						}
					}
			?>
		</body>
</html>
