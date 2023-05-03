<?php
use MyApp\Entities\UserLinks;
include_once('../../vendor/autoload.php');
include_once('../db_connection.php');

if(isset($_POST['linkId']) && isset($_POST['linkTitleEdit']) || isset($_POST['linkId']) && isset($_POST['linkAddressEdit'])) {
    $linkIdInput = $_POST['linkId'];

    $link = UserLinks::getById((int)$linkIdInput);

    $titleInput = isset($_POST['linkTitleEdit']) ? $_POST['linkTitleEdit'] : $link->title ;
    $addressInput = isset($_POST['linkAddressEdit']) ? $_POST['linkAddressEdit'] : $link->address;

    $linkClass = new UserLinks;
    $linkClass->updateUserLink(implode(',', $titleInput), implode(',', $addressInput), $linkIdInput);

    header('Location: ../../public/user_admin.php'); exit;
}

?>