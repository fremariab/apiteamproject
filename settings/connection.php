<?php
$servername = "localhost";
$username = "root";
$password = "!kwqFYObck=6";
$database = "api";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
