<?php
$servername = "172.166.117.107";
$username = "root";
$password = "!kwqFYObck=6";
$database = "api";

// $servername = "localhost";
// $username = "root";
// $password = "";
// $database = "api";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
