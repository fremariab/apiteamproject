<?php
/*fetch.php */

header('Access-Control-Allow-Origin:*');
header('Content-Type: application/json');
header('Access-Control-Allow-Method: GET');
header('Access-Control-Allow-Headers: Content-Type,Access-Control-Allow-Headers, Authorization, X-Request-With');

include ('functions.php');

$listOfUsers = getListOfUsers();
echo $listOfUsers;