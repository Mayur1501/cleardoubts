<?php
// Script for connect to the database
$server = "localhost";
$username = "root";
$password = "";
$database = "studhub";

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn) {
    die("Connection is not established");
}

?>