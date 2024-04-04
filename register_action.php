<?php
$servername = "localhost";
$username = "root";
$password = "!kwqFYObck=6";
$database = "api"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$response = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $passwd = $_POST['passwd'];
    
    $sql = "INSERT INTO People (fname, lname, gender, dob, tel, email, passwd)
            VALUES ('$fname', '$lname', '$gender', '$dob', '$tel', '$email', '$passwd')";
    
    if ($conn->query($sql) === TRUE) {
        $response['status'] = 'success';
        $response['message'] = 'New record created successfully';
        $response['data'] = array(
            'fname' => $fname,
            'lname' => $lname,
            'gender' => $gender,
            'dob' => $dob,
            'tel' => $tel,
            'email' => $email
        );
    } else {
        $response['status'] = 'error';
        $response['message'] = 'Error: ' . $sql . "<br>" . $conn->error;
    }
} else {
    $response['status'] = 'error';
    $response['message'] = 'Invalid request method';
}

header('Content-Type: application/json');
echo json_encode($response);

$conn->close();
?>
