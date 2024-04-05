<?php
/*insert.php */

header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json');
header('Access-Control-Allow-Method: GET');
header('Access-Control-Allow-Headers: Content-Type,Access-Control-Allow-Headers, Authorization, X-Request-With');

include ('functions.php');

$inputData = json_decode(file_get_contents("php://input"));

$res;

if (empty($inputData)) {
    $res["msg"] = "No data received";
    echo json_encode($res);
    exit();
} 
$storeUser = storeUser($inputData);

// $res["msg"] = ;
echo $storeUser;


// var_dump($inputData);
// exit();
// $requestMethod = $_SERVER["REQUEST_METHOD"];

// if ($requestMethod == "POST") {
//     $inputData = json_decode(file_get_contents("php://input"), true);
//     var_dump($inputData);
//     exit;
//     if (empty($inputData)) {
//         $storeUser = storeUser($_POST);
//     } else {
//         $storeUser = storeUser($inputData);
//     }

// } else {
//     var_dump("something");
//     exit;
//     $data = [
//         'status' => 405,
//         'message' => $requestMethod . 'MethodNotAllowed',
//     ];
//     header("HTTP/1.0 405 Method Not Allowed");
//     echo json_encode($data);
// }
// ?>