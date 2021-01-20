<?php
require_once "Database.php";

class Registration {
    public static function signup($data) {
        $db = Database::getInstance();

        if(!isset($data['name']) || !isset($data['lastname']) || !isset($data['email']) || !isset($data['pass']) || !isset($data['gender']) || !isset($data['date'])) {
            return false;            
        }

		$name = $data['name'];
		$lastname = $data['lastname'];
        $email = $data['email'];
		$pass = $data['pass'];
		$gender = $data['gender'];
		$date = $data['date'];
        
        $sql = "INSERT INTO users SET name = '$name', lastname = '$lastname', email = '$email', pass = '$pass', gender = '$gender', date = '$date';";
        $result = $db->query($sql);

        return $result;
    }
}