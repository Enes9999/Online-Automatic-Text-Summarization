<?php
    require('../Storage/db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['email'])) {
        // removes backslashes
        $email = stripslashes($_REQUEST['email']);
        //escapes special characters in a string
        $email = mysqli_real_escape_string($con, $email);

        $name = stripslashes($_REQUEST['name']);
        $name = mysqli_real_escape_string($con, $name);
        
        $lastname = stripslashes($_REQUEST['lastname']);
    	$lastname = mysqli_real_escape_string($con, $lastname);

        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        
        $gender = stripslashes($_REQUEST['gender']);
        $gender = mysqli_real_escape_string($con, $gender);
        
        $birthdate = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (name, lastname, email, password, gender, birthdate)
                     VALUES ('$name', '$lastname' , '$email', '$password', '$gender', '$birthdate')";
        $result   = mysqli_query($con, $query);
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
    } else {
    }
?>