<?php
/*fetch.php */

header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json');
header('Access-Control-Allow-Method: GET');
header('Access-Control-Allow-Headers: Content-Type,Access-Control-Allow-Headers, Authorization, X-Request-With');

include ('functions.php');

$requestMethod = $_SERVER["REQUEST_METHOD"];

if ($requestMethod == "GET") {
    $listOfUsers = getListOfUsers();
    echo $listOfUsers;
} else {
    $data = [
        'status' => 405,
        'message' => $requestMethod . 'MethodNotAllowed',
    ];
    header("HTTP/1.0 405 Method Not Allowed");
    echo json_encode($data);
}
