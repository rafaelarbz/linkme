<?php

use MyApp\Entities\User;
use MyApp\Entities\UserLinks;
use MyApp\Entities\UserProfile;

$db_host = 'localhost';
$db_user = 'root';
$db_password = '123456';
$db_name = 'linkme';

$connection = mysqli_connect($db_host, $db_user, $db_password, $db_name);

User::setConnection($connection);
UserProfile::setConnection($connection);
UserLinks::setConnection($connection);
?>