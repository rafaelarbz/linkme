<?php
namespace MyApp\Entities;

class UserProfile {

    private $id;
    public $userId;
    public $backgroundColor;
    public $fontFamily;
    public $fontColor;
    public $buttonClass;
    public $buttonColor;
    public $buttonBorderColor;
    public $createdAt;
    public $updatedAt;
    protected static $database;

    public static function setConnection($database) {
        return self::$database = $database;
    }
    /**
     * @return UserProfile|null
     */
    public static function getProfileById($id) {
        $query = "SELECT * FROM user_profile WHERE id = $id";
        return self::$database->query($query)->fetch_object();
    }
    /**
     * @return UserProfile|null
     */
    public static function getProfileByUserId($userId) {
        $query = "SELECT * FROM user_profile WHERE user_id = $userId";
        return self::$database->query($query)->fetch_object();
    }
    /**
     * @return UserProfile|null
     */
    public static function getProfileByUsername($username) {
        $query = "SELECT * FROM user_profile p 
        INNER JOIN user u ON p.user_id=u.id 
        WHERE u.username = '$username'";
        return self::$database->query($query)->fetch_object();
    }

    public function createProfile(UserProfile $profile, $userId) {
        $query = "INSERT INTO user_profile (user_id, background_color, font_family, font_color, button_class, button_color, button_border_color) 
        VALUES ('$userId', '$profile->backgroundColor', '$profile->fontFamily', '$profile->fontColor', '$profile->buttonClass', '$profile->buttonColor', '$profile->buttonBorderColor')";
        return self::$database->query($query);
    }

    public function createDefaultProfile($userId) {
        $query = "INSERT INTO user_profile (user_id, background_color, font_family, font_color, button_class, button_color, button_border_color) 
        VALUES ('$userId', '#000000', 'Montserrat', '#ffffff', 'rounded', '#ffffff', '#000000')";
        return self::$database->query($query);
    }

    public function updateProfile($id, $backgroundColor, $fontFamily, $fontColor, $buttonClass, $buttonColor, $buttonBorderColor) {
        $query = "UPDATE user_profile SET background_color = '$backgroundColor', font_family = '$fontFamily', font_color = '$fontColor', 
        button_class = '$buttonClass', button_color = '$buttonColor', button_border_color = '$buttonBorderColor'
        WHERE id = $id";
        return self::$database->query($query);
    }

    public function deleteProfile($id) {
        $query = "DELETE FROM user_profile WHERE id = $id";
        return self::$database->query($query);
    }

    public function deleteProfileByUserId($userId) {
        $query = "DELETE FROM user_profile WHERE user_id = $userId";
        return self::$database->query($query);
    }

}
?>