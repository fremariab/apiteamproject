<?php
/*functions.php */

require './settings/connection.php';
function error422($message)
{
    $data = [
        'status' => 422,
        'message' => $message,
    ];
    header("HTTP/1.0 422 Unprocessable Entity");
    echo json_encode($data);
}
function storeUser($user_data)
{
    global $conn;
    $full_name = mysqli_escape_string($conn, $user_data['name']);
    $email = mysqli_escape_string($conn, $user_data['email']);

    if (empty(trim($full_name))) {
        return error422("Enter your full name");

    } else if (empty(trim($email))) {
        return error422("Enter your email");
    } else {
        $sql = "INSERT INTO People(email,fullname) VALUES('$email','$full_name')";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            $data = [
                'status' => 201,
                'message' => 'User Created Successfully',
            ];
            header("HTTP/1.0 201 User Created Successfully");
            return json_encode($data);

        } else {
            $data = [
                'status' => 500,
                'message' => 'Internal Serval Error',
            ];
            header("HTTP/1.0 500 Internal Serval Error");
            return json_encode($data);
        }
    }

}
function getListOfUsers()
{
    global $conn;

    $sql = "SELECT * FROM People";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            $final_result = mysqli_fetch_all($result, MYSQLI_ASSOC);

            $data = [
                'status' => 200,
                'message' => 'User List Found',
                'data' => $final_result
            ];
            header("HTTP/1.0 200 User List Found");
            return json_encode($data);
        } else {
            $data = [
                'status' => 404,
                'message' => 'No Users Found',
            ];
            header("HTTP/1.0 404 No Users Found");
            return json_encode($data);
        }
    } else {
        $data = [
            'status' => 500,
            'message' => 'Internal Serval Error',
        ];
        header("HTTP/1.0 500 Internal Serval Error");
        return json_encode($data);
    }
}