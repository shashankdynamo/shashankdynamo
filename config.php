<?php

$server = 'localhost';
$user = 'root';
$password = '';
$database = 'images_upload';

$conn = mysqli_connect($server, $user, $password, $database);

if (!$conn) {
	
	echo "Connection Failed ".mysqli_error() OR die();
}