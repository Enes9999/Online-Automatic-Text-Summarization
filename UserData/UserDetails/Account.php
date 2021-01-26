<?php
session_start();
require_once '../Storage/Database.php';


// Authentication
// Authorization
class Auth
{

    /**
     * returns authenticated user
     */
    public static function user()
    {
        return isset($_SESSION['user']) ? $_SESSION['user'] : null;
    }

    /**
     * checks if user is authenticated 
     */
    public static function isLoggedIn()
    {
        return static::user() !== null;
    }



    /**
     * process user authentication
     */
    public static function login($data)
    {
        $db = Database::getInstance();

        if (!isset($data['email']) || !isset($data['password'])) {
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


class Profile
{
    public static function delete($id)
    {
        $db = Database::getInstance();

        $sql = "DELETE FROM users WHERE id = {$id}";
        $result = $db->query($sql);

        return $result;
    }

    public static function edit($id)
    {


        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];
        $birthdate = $_POST['birthdate'];

        // $sql = "UPDATE INTO users (name, lastname, password, gender, birthdate) VALUES ('" . $name . "', '" . $lastname .  "','" . $password . "', '" . $gender . "', '" . $birthdate . "');";

        $sql = "UPDATE users SET name='$name', lastname='$lastname', 
        password='$password', gender='$gender',
        birthdate='$birthdate' WHERE id = '" . $_SESSION['user']['id'] . "'";



        $link = mysqli_connect("localhost", "root", "", "onlinetextsummarization");

        // Check connection
        if ($link === false) {
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }

        // Attempt update query execution
        if (mysqli_query($link, $sql)) {
            echo "Records were updated successfully.";
        } else {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }

        // Close connection
        mysqli_close($link);
    }
}
