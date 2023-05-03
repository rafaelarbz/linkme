<?php
namespace MyApp\Entities;

class User {

    private $id;
    public $name;
    public $email;
    public $username;
    public $passwordHash;
    public $createdAt;
    public $updatedAt;
    protected static $database;

    public static function setConnection($database) {
        return self::$database = $database;
    }
    
    /**
     * @return User|null
     */
    public static function getUserById($id) {
        $query = "SELECT * FROM user WHERE id = $id";
        return self::$database->query($query)->fetch_object();
    }
    /**
     * @return User|null
     */
    public static function getUserByEmail($email) {
        $query = "SELECT * FROM user WHERE email = '$email'";
        return self::$database->query($query)->fetch_object();
    }
    /**
     * @return User|null
     */
    public static function getUserByUsername($username) {
        $query = "SELECT * FROM user WHERE username = '$username'";
        return self::$database->query($query)->fetch_object();
    }

    public static function getUserPasswordByEmail($email) {
        $query = "SELECT password_hash FROM user WHERE email = '$email'";
        return self::$database->query($query)->fetch_assoc();
    }

    public static function getUserPasswordById($id) {
        $query = "SELECT password_hash FROM user WHERE id = $id";
        return self::$database->query($query)->fetch_assoc();
    }

    public function createUser(User $user) {
        $query = "INSERT INTO user (name, email, username, password_hash) 
        VALUES ('$user->name', '$user->email', '$user->username', '$user->passwordHash')";
        return self::$database->query($query);
    }

    public function updateUser($id , $name, $username, $passwordHash) {
        $query = "UPDATE user SET name = '$name', username = '$username', password_hash = '$passwordHash'
        WHERE id = $id";
        return self::$database->query($query);
    }

    public function deleteUser($id) {
        $query = "DELETE FROM user WHERE id = $id";
        return self::$database->query($query);
    }

}
?>