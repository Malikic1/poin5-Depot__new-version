<?php
$hostname = "Localhost";
$username = "root";
$password = "";
$db_name = "point5depot_users_db";

$conn = mysqli_connect($hostname, $username, $password, $db_name) or die("database connection failed");
