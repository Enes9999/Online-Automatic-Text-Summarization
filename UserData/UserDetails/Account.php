<?php
session_start();
require_once '../Storage/Database.php';


// Authentication
// Authorization
class Auth {

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
     * process user authentication
     */
    public static function login($data) {
        $db = Database::getInstance();

        if(!isset($data['email']) || !isset($data['password'])) {
            return false;            
        }
        
        $email = $data['email'];
        $password = $data['password'];

        $sql = "SELECT * FROM users WHERE email = '$email' LIMIT 1;";
        $result = current($db->find($sql));
        if ($result && $result['password'] == $password) {
            unset($result['password']);
            $_SESSION['user'] = $result;
            return true;
        }
        return false;
    }
}


class Profile {
    public static function delete($id) {
        $db = Database::getInstance();
    
        $sql = "DELETE FROM users WHERE id = {$id}";
        $result = $db->query($sql);
    
        return $result;
    }
    
    public static function edit($id) {
        $db = Database::getInstance();
    

        $id = $_GET['id']; // get id through query string

        $qry = "SELECT * from users WHERE id = {$id}"; // select query

        $data = mysqli_fetch_array($qry);
         

       


        // $result = $db->query($sql);
    
        if(isset($_POST['update'])) // when click on Update button
        {
            $name = $_POST['name'];
            $lastname = $_POST['lastname'];
            $email= $_POST['email'];
            $password = $_POST['password'];
            $gender = $_POST['gender'];
            $birthdate = $_POST['birthdate'];
            
            $edit = mysqli_query($db,"update users set name='$name', lastname='$lastname', email='$email', password='$password',
            gender='$gender', birthdate='$birthdate' where id='$id'");
            
            if($edit)
            {
                mysqli_close($db); // Close connection
                header("location: profile.php"); // redirects to all records page
                exit;
            }
            else
            {
                echo mysqli_error();
            }    	
        }
        
    }

}

?>






   