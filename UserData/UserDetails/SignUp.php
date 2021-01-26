<?php
require_once '../Storage/Database.php';

class Registration {
    public static function signup($data) {
        $db = Database::getInstance();

        if(!isset($data['email']) || !isset($data['name']) || !isset($data['lastname']) || !isset($data['password']) || !isset($data['gender']) || !isset($data['date'])) {
            return false;            
        }

        $name = $data['name'];
        $lastname = $data['lastname'];
        $email = $data['email'];
        $password = $data['password'];
        $gender = $data['gender'];
        $birthdate = $data['date'];

        
        $sql = "INSERT INTO users SET name = '$name', lastname = '$lastname', email = '$email', password = '$password', gender = '$gender', birthdate = '$birthdate';";
                     
        $result = $db->query($sql);

        if ($result) {
            echo "<div class='login100-form validate-form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='login100-form validate-form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='signup.php'>signup</a> again.</p>
                  </div>";
        }

        return $result;
    }
} 

