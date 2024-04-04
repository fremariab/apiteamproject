<?php

require '../settings/connection.php';
function getListOfUsers(){
    global $conn;

    $sql="SELECT * FROM People";
    $result = mysqli_query($conn,$sql);

    if ($result){
        if(mysqli_num_rows($result)>0){
            $final_result = mysqli_fetch_all($result,MYSQLI_ASSOC);

            $data =[
                'status'=> 200,
                'message' => 'User List Found',
                'data'=> $final_result
            ];
            header("HTTP/1.0 200 User List Found");
            return json_encode($data);
        }else{
            $data =[
                'status'=> 404,
                'message' => 'No Users Found',
            ];
            header("HTTP/1.0 404 No Users Found");
            return json_encode($data);
        }
    }else{
        $data =[
            'status'=> 500,
            'message' => 'Internal Serval Error',
        ];
        header("HTTP/1.0 500 Internal Serval Error");
        return json_encode($data);
    }
}