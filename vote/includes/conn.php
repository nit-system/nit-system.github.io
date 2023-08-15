<?php
	$conn = new mysqli('localhost', 'root', '', 'votesysystem');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>