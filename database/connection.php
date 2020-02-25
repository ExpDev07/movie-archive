<?php

// Configurations.
require('config/database.php');

// Database instance.
$mysqli = new mysqli($host, $username, $password, $database);

// Connect to database or die.
if ($mysqli->connect_errno) {
   die("Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);
}

?>