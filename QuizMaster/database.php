<?php
// Create database connection credentials
$db_host = 'localhost';
$db_name = 'quizdb';
$db_user = 'root';
$db_password = 'godhelps';

// Create mysqli object for connection
$mysqli = new mysqli($db_host, $db_user, $db_password, $db_name);

// Display error message in case of failed connection
if($mysqli->connect_error) {
	printf("Connect failed: %s\n", $mysqli->connect_error);
	exit();
}
