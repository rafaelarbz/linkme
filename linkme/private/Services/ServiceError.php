<?php
    $errors = array (
        1 => "User not found!",
        2 => "Incorrect credentials",
        3 => "Login failed",
        4 => "Request failed, try again",
        5 => "Incorrect password",
    );
    $error_id = isset($_GET['err']) ? (int)$_GET['err'] : 0;
    if ($error_id != 0) {
        $msg = $errors["$error_id"];
    } 
?>