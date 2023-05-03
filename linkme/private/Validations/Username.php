<?php

use MyApp\Entities\User;

include_once('../../vendor/autoload.php');
include_once('../db_connection.php');

if (!empty($_POST['username'])) {
    $username = $_POST['username'];
    echo validationUserName($username);
}
function validationUserName($value) {
    $user = User::getUserByUserName($value); 
    if ($user != null) {
        return json_encode(array("alert" => "Username already exists", "status" => "invalid"));
    }elseif(preg_match('/[^A-Za-z0-9]/', $value)) {
        return json_encode(array("alert" => "Username must contain only letters and numbers!", "status" => "invalid"));
    }else{
        return json_encode(array("alert" => null, "status" => "valid"));
    }
}

if (!empty($_POST['usernameEdit']) && !empty($_POST['userId'])) {
    $userName = $_POST['usernameEdit'];
    $userId = $_POST['userId'];
    echo validationUserNameEdit($userName, $userId);
}
function validationUserNameEdit($value, $id) {
    $user = User::getUserByUserName($value); 
    $activeUser = new User;
    $userResult = $activeUser->getUserById($id);

    if ($user != null && $userResult->username !== $value) {
        return json_encode(array("alert" => "Username already exists", "status" => "invalid"));
    }elseif(preg_match('/[^A-Za-z0-9]/', $value)) {
        return json_encode(array("alert" => "Username must contain only letters and numbers!", "status" => "invalid"));
    }else{
        return json_encode(array("alert" => null, "status" => "valid"));
    }
}
?>