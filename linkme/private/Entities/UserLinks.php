<?php
namespace MyApp\Entities;

class UserLinks {
    private $id;
    public $userId;
    public $profileId;
    public $title;
    public $address;
    public $createdAt;
    public $updatedAt;
    protected static $database;

    public static function setConnection($database) {
        return self::$database = $database;
    }

    public static function getByUserId($userId) {
        $query = "SELECT * FROM user_links WHERE user_id = $userId";
        return self::$database->query($query)->fetch_all();
    }

    public static function getByProfileId($profileId) {
        $query = "SELECT * FROM user_links WHERE profile_id = $profileId";
        return self::$database->query($query)->fetch_all();
    }

    /**
     * @return UserLinks|null
     */
    public static function getById($id) {
        $query = "SELECT * FROM user_links WHERE id = $id";
        return self::$database->query($query)->fetch_object();
    }

    public static function getByProfileAndUser($profileId, $userId) {
        $query = "SELECT * FROM user_links WHERE profile_id = $profileId AND user_id = $userId";
        return self::$database->query($query)->fetch_all();
    }

    public function createUserLink(UserLinks $link, $userId, $profileId) {
        $query = "INSERT INTO user_links (user_id, profile_id, button_title, button_link) 
        VALUES ('$userId', '$profileId', '$link->title', '$link->address')";
        return self::$database->query($query);
    }

    public function updateUserLink($title, $address, $id) {
        $query = "UPDATE user_links SET  button_title = '$title', button_link = '$address'
        WHERE id = $id";
        return self::$database->query($query);
    }

    public function deleteUserLink($id) {
        $query = "DELETE FROM user_links WHERE id = $id";
        return self::$database->query($query);
    }

    public function deleteUserLinkByUserId($userId) {
        $query = "DELETE FROM user_links WHERE user_id = $userId";
        return self::$database->query($query);
    }

    public function deleteUserLinkByProfileId($profileId) {
        $query = "DELETE FROM user_links WHERE profile_id = $profileId";
        return self::$database->query($query);
    }
}
?>