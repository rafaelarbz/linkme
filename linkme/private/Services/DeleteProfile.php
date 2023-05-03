<?php

use MyApp\Entities\User;
use MyApp\Entities\UserProfile;

include_once('../../vendor/autoload.php');
include_once('../db_connection.php');

if(isset($_POST['profileId']) && isset($_POST['userId'])) {
    $profileId = $_POST['profileId'];
    $userId = $_POST['userId'];

    $profileClass = new UserProfile;
    $result = $profileClass->deleteProfile($id);

    $user = new User;
    $user = $user->getUserById((int)$userId);

    header("Location: ../../public/user_admin.php"); exit;
}

?>