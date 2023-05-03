<?php

use MyApp\Entities\User;

include_once('../../vendor/autoload.php');
include_once('../db_connection.php');

if(isset($_POST['userId']) && isset($_POST['name']) && isset($_POST['username']) && isset($_POST['activePassword'])) {
    
    $userId = ($_POST['userId']);
    $nameInput = $_POST['name'];
    $usernameInput = $_POST['username'];
    $activePassword = $_POST['activePassword'];

    isset($_POST['password']) ? $passwordInput = $_POST['password'] : $passwordInput = null ;
    
    $user = User::getUserById((int)$userId);
    $dbPassword = User::getUserPasswordById($userId)['password_hash'];

    if( $dbPassword != md5($activePassword)) {
        if (!isset($_SESSION)) session_start();

        $_SESSION['logged'] = TRUE;
        $_SESSION['username'] = $user->username;

        header('Location: ../../public/user_admin.php?err=5&nav=nav-account-tab'); exit;
    }

    $passwordInput != null ? $passwordInput = md5($passwordInput) : $passwordInput = $dbPassword;

    $userClass = new User;
    $userClass->updateUser($userId, $nameInput, $usernameInput, $passwordInput);

    if (!isset($_SESSION)) session_start();

    $_SESSION['logged'] = TRUE;
    $_SESSION['username'] = $usernameInput;
    header('Location: ../../public/user_admin.php?nav=nav-account-tab'); exit;
}