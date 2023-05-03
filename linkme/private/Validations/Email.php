<?php

use MyApp\Entities\User;

include_once('../../vendor/autoload.php');
include_once('../db_connection.php');


if (!empty($_POST['email'])) {
    $email = $_POST['email'];
    echo validationEmail($email);
}
function validationEmail($value) {
    $user = User::getUserByEmail($value);
    if ($user != null) {
        return json_encode(array("alert" => "User already registered, login with this email!", "status" => "invalid"));
    }else{
        return json_encode(array("alert" => null, "status" => "valid"));
    }
}

?>