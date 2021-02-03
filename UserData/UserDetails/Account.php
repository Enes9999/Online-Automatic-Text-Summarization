<?php
session_start();
require_once '../Storage/Database.php';



class Auth
{

  
    public static function user()
    {
        return isset($_SESSION['user']) ? $_SESSION['user'] : null;
    }

 
    public static function isLoggedIn()
    {
        return static::user() !== null;
    }



    
    public static function login($data)
    {
        
        $db = Database::getInstance();

        if (!isset($data['email']) || !isset($data['password'])) {
            return false;
        }

        $email = $data['email'];
        $password = $data['password'];

        $sql = $sql = "SELECT * FROM users WHERE email = '$email' LIMIT 1;";
        $result = current($db->find($sql));
        if ($result && $result['password'] == $password) {
            unset($result['password']);
            $_SESSION['user'] = $result;
            return true;
        }
        return false;
    }
}



