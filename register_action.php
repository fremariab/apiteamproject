<?php

$servername = "localhost";
$username = "root";
$password = "!kwqFYObck=6";
$database = "api"; 


$conn = new mysqli($servername, $username, $password, $database);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM People";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    $peopleData = array();
    
    while($row = $result->fetch_assoc()) {
        $peopleData[] = $row;
    }
  
    header('Content-Type: application/json');
    echo json_encode($peopleData);
} else {
   
    echo "No data found";
}


$conn->close();
?>
