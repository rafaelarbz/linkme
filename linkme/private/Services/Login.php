<?php

use MyApp\Entities\User;

include_once('../../vendor/autoload.php');
include_once('../db_connection.php');

if(isset($_POST['email']) && isset($_POST['password'])) {
    $emailInput = $_POST['email'];
    $passwordInput = $_POST['password'];

    $user = User::getUserByEmail($emailInput);
    $dbPassword = User::getUserPasswordByEmail($emailInput)['password_hash'];

    if ($user == null) {
        if (!isset($_SESSION)) session_start();

        header("Location: ../../public/index.php?err=1"); exit;
    } elseif ($dbPassword != md5($passwordInput)) {
        if (!isset($_SESSION)) session_start();

        header("Location: ../../public/index.php?err=2"); exit;
    } elseif ($user != null && $dbPassword == md5($passwordInput)) {

        if (!isset($_SESSION)) session_start();

        $_SESSION['logged'] = TRUE;
        $_SESSION['username'] = $user->username;

        header("Location: ../../public/user_admin.php"); exit;
        
    } else {
        if (!isset($_SESSION)) session_start();

        header("Location: ../../public/index.php?err=3"); exit;
    }
}
?>