<?php

use MyApp\Entities\User;

include_once('../../vendor/autoload.php');
include_once('../db_connection.php');

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['username']) && isset($_POST['password']) && isset($_POST['passwordConfirm'])) {
    $nameInput = $_POST['name'];
    $emailInput = $_POST['email'];
    $usernameInput = $_POST['username'];
    $passwordInput = $_POST['password'];
    $passwordConfirmInput = $_POST['passwordConfirm'];

    $resultUser = createUser($nameInput, $emailInput, $usernameInput, $passwordInput);

    if($resultUser != false){

        if (!isset($_SESSION)) session_start();

        $_SESSION['logged'] = TRUE;
        $_SESSION['username'] = $usernameInput;
        $_SESSION['password'] = md5($passwordInput);

        header("Location: ../../public/user_admin.php"); exit;
    } else {
        if (!isset($_SESSION)) session_start();

        header("Location: ../../public/user_register.php?err=4"); exit;
    }

}

function createUser($name, $email, $username, $password) {
    $user = new User;
    $user->name = $name;
    $user->email = $email;
    $user->username = $username;
    $user->passwordHash = md5($password);

    return $user->createUser($user);
}

?>