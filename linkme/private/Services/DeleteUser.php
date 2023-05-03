<?php

use MyApp\Entities\User;
use MyApp\Entities\UserProfile;

include_once('../../vendor/autoload.php');
include_once('../db_connection.php');

if(isset($_POST['userId'])) {
    $userId = ($_POST['userId']);
    echo deleteUser($userId);
}else{
    echo json_encode(array("success" => "false", "error" => "Request failed!"));
}

function deleteUser($id) {
    $userClass = new User;
    $profileClass = new UserProfile;

    $resultProfile = $profileClass->deleteProfileByUserId($id);
    $resultUser = $userClass->deleteUser($id);

    if($resultProfile && $resultUser != false){
        return json_encode(array("success" => "true", "error" => null));
    }else{
        return json_encode(array("success" => "false", "error" => "Ops, unable to delete your account!"));
    }
}

?>