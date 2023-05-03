<?php

use MyApp\Entities\User;
use MyApp\Entities\UserProfile;
include_once('../../vendor/autoload.php');
include_once('../db_connection.php');

if(isset($_POST['userId'])) {
    
    $userId = $_POST['userId'];
    $profile = new UserProfile;
    $profile->createDefaultProfile($userId);

    $user = new User;
    $user = $user->getUserById((int)$userId);

    header("Location: ../../public/user_admin.php"); exit;
}

?>