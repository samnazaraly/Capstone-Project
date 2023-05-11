<?php

//if a post method is being used (from login.php)
if ($_SERVER["REQUEST_METHOD"]==="POST"){

//require to check through database
$mysqli = require __DIR__ . "/signupdatabase.php";

//search database for matching email
$sql = sprintf("SELECT * FROM user 
                WHERE email ='%s'",
                $_POST["email"]);


//to protect from SQL injection attack
//use $mysqli->real_escape_string before email post method
$result = $mysqli->query($sql);

//fetch all information for email entered
$user = $result->fetch_assoc();

//display all information from entered email
//var_dump($user);
//exit;

//if the user entered exists, require a password
//compare password entered to password in database
if($user){

    //if password entered = password in database, display success 

    if(($_POST["password"]=== $user["password"])){
        echo("login successful");
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