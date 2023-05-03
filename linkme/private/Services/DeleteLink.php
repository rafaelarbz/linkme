<?php

use MyApp\Entities\User;
use MyApp\Entities\UserLinks;

include_once('../../vendor/autoload.php');
include_once('../db_connection.php');

if(isset($_POST['linkIdDelete'])) {
    $linkId = $_POST['linkIdDelete'];

    $linkClass = new UserLinks;
    $linkClass->deleteUserLink((int)implode(',', $linkId));

    header('Location: ../../public/user_admin.php');
}

?>