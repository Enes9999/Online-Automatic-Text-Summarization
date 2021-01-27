<?php
    require_once('../Storage/Database.php');
class Profile
{

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

    public static function showprofile()
    {
        $db = Database::getInstance();
        $sql = " SELECT id, name, lastname, email, password, gender, birthdate FROM users WHERE id = '" . $_SESSION['user']['id'] . "'";
        $results = current($db->find($sql));
        return $results;

    }
}