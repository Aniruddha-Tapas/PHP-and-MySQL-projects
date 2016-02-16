<?php 

include 'database.php';

//Validate if the form was submitted

if(isset ($_POST['submit']) ) {
	
	//Strip any unwanted html tags or scripts that might be entered
	$user = mysqli_real_escape_string($con, $_POST['user']);
	$message = mysqli_real_escape_string($con, $_POST['message']);

	//Set the timezone
	date_default_timezone_set("Asia/Calcutta");
	$time = date('h:i:s a', time());

	// Validate Input
	if (!isset($user) || $user == '' || !isset($message) || $message == '') {
		//If button is clicked without filling name and message
		$error = "Please fill in your name and message";
		header("Location: index.php?error=".urlencode($error)); 
		exit();
	} else {
		$query = "INSERT INTO messages (user, message, time)
							VALUES ('$user', '$message', '$time')";

		if(!mysqli_query($con, $query)) {
			//If not inserted an error message will be displayed
			die('Error: '.mysqli_error($con) );

		} else {
			//If inserted redirect them back to index.php
			header("Location: index.php");
			exit();
		}
	}
}

?>