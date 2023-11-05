<?php
	$conn = new mysqli('localhost', 'root', '', 'votaciones');
	
	if(!$conn){
		die("Error: Failed to connect to database");
	}
?>	