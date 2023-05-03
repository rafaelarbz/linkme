<?php

use MyApp\Entities\User;
use MyApp\Entities\UserLinks;
use MyApp\Entities\UserProfile;
include_once('../../vendor/autoload.php');
include_once('../db_connection.php');

if(isset($_POST['userId']) && isset($_POST['linkTitle']) && isset($_POST['linkAddress'])) {
    
    $userId = $_POST['userId'];
    $userClass = new User;
    $user = $userClass->getUserById((int)$userId);
    $profile = new UserProfile;
    $profileResult = $profile->getProfileByUserId((int)$userId);

    $link = new UserLinks;
    $link->title = $_POST['linkTitle'];
    $link->address = $_POST['linkAddress'];
    $link->createUserLink($link, $userId, $profileResult->id);

    header("Location: ../../public/user_admin.php"); exit;
}

?>