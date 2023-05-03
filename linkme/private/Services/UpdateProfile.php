<?php
use MyApp\Entities\UserProfile;
include_once('../../vendor/autoload.php');
include_once('../db_connection.php');

if(isset($_POST['profileId'])) {
    
    $id = $_POST['profileId'];
    $profile = UserProfile::getProfileById(intval($id));

    $backgroundColorInput = isset($_POST['backgroundColor']) ? $_POST['backgroundColor'] : $profile->backgroundColor;
    $fontFamilyInput = isset($_POST['fontFamily']) ? $_POST['fontFamily'] : $profile->fontFamily;
    $fontColorInput = isset($_POST['fontColor']) ? $_POST['fontColor'] : $profile->fontColor;
    $buttonClassInput = isset($_POST['buttonClass']) ? $_POST['buttonClass'] : $profile->buttonClass;
    $buttonColorInput = isset($_POST['buttonColor']) ? $_POST['buttonColor'] : $profile->buttonColor;
    $buttonBorderColorInput = isset($_POST['buttonBorderColor']) ? $_POST['buttonBorderColor'] : $profile->buttonBorderColor;
    $profileClass = new UserProfile;
    $profileClass->updateProfile($id, $backgroundColorInput, $fontFamilyInput, $fontColorInput, $buttonClassInput, $buttonColorInput, $buttonBorderColorInput);

    header('Location: ../../public/user_admin.php?nav=nav-styles-tab');
}

?>