<?php
	// Define variables to store our username
	$user = 'People';
	$pass = '';
	$dbname = 'cybertrom';

	// Create a connection to the MySql server 
	//$link = mysqli_connect( 'localhost', $user, $pass); could not identify the dbname
	
	$link = new mysqli( 'localhost', $user, $pass, $dbname);
	
	
	// Check if connection was successful
	if (!$link)
	{
		echo "unable to connect to MySq.".PHP_EOL;
		
		echo "Debugging errno:".mysqli_connect_errno().PHP_EOL;
		
		echo "Debugging error:".mysqli_connect_error().PHP_EOL;
		exit;
	}
	
	//echo "Success: A proper connection to MySql was made! The my_db database is great.".PHP_EOL;
	//echo "Host information: ".mysqli_get_host_info($link).PHP_EOL;
	
?>