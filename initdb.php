<?php

$servername = "localhost:8889";
$username = "root";
$password = "root";

// Create connection
$conn = mysqli_connect($servername, $username, $password, 'ft_minishop');
// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

?>