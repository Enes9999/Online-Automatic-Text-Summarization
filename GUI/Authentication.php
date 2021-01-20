<?php
session_start();

require_once 'Database.php';

// Authentication
// Authorization
class Authentication {

    /**
     * returns authenticated user
     */
    public static function user() {
        return isset($_SESSION['user']) ? $_SESSION['user'] : null;
    }

    /**
     * checks if user is authenticated 
     */
    public static function isLoggedIn() {
        return static::user() !== null;
    }

    /**
     * checks if authenticated user has role "admin"
     */
    public static function isAdmin() {
        $user = static::user();
        return ($user && $user['role'] === 'admin');
    }

    /**
     * process user authentication
     */
    public static function login($data) {
        $db = Database::getInstance();

        if(!isset($data['email']) || !isset($data['pass'])) {
            return false;            
        }
        
        $email = $data['email'];
        $password = $data['pass'];

        $sql = "SELECT * FROM users WHERE email = '$email' LIMIT 1;";
        $result = current($db->find($sql));
        if ($result && $result['pass'] == $password) {
            unset($result['pass']);
            $_SESSION['user'] = $result;
            return true;
        }
        return false;
    }
}