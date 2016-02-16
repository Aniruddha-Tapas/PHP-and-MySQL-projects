<?php 

// Connect to our MySQL database
// Remember not to use the msql_connect as it's deprecated
// Use the mysqli_connect to connect to our database 
$con = mysqli_connect("localhost", "root", "godhelps", "messagebox");

// Test Connection
if(mysqli_connect_errno() ) {
	echo "Failed to connect to MySQL: ".mysqli_connect_error();
}

?>