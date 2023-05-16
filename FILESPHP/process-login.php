<?php

session_start(); // Start the session at the beginning of the script

//if a post method is being used (from login.php)
if ($_SERVER["REQUEST_METHOD"]==="POST"){

    //require to check through database
    $mysqli = require __DIR__ . "/signupdatabase.php";

    //prevent sql injection
    $email = $mysqli->real_escape_string($_POST["email"]);

    //search database for matching email
    $sql = sprintf("SELECT * FROM user WHERE email ='%s'", $email);

    $result = $mysqli->query($sql);

    //fetch all information for email entered
    $user = $result->fetch_assoc();

    //if the user entered exists, require a password
    //compare password entered to password in database
    if($user){
        if (password_verify($_POST["password"], $user["password"])) {
            // Store user data in session
            $_SESSION['userId'] = $user['id'];
            $_SESSION['userName'] = $user['name'];
            //if successful, redirect to dashboard 
            header('Location: dashboard.php');
        }
        else{
            echo "incorrect password";
        }
    }
    else{    
        echo "incorrect email";
    }
}
?>
