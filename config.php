<?php
$hostname = "Localhost";
$username = "root";
$password = "";
$db_name = "point5depot_users_db";

$base_url = "http://localhost/point5/";
$v_email = "azeezmalik19@fmail.com";

$conn = mysqli_connect($hostname, $username, $password, $db_name) or die("database connection failed");
