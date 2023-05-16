<?php



// if "name" field is empty, display "name is required"
if(empty($_POST["name"])){

    echo("name is required  ");
}

//email validator
//if email used is not a valid email, display msg
if (! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
    echo ("Valid email is required" . "<br>");
}

//make sure password is at least 8 characters long 
if(strlen($_POST["password"])<8){
    echo("Password must be at least 8 characters" . "<br>");
}

//make sure password contains at least one letter

if(! preg_match("/[a-z]/i", $_POST["password"])){
    echo("Password must contain at least one letter" . "<br>");
}

//make sure password contains at least one number 
if(! preg_match("/[0-9]/i", $_POST["password"])){
    echo("Password must contain at least one number" . "<br>");
}

//verify that password is same as password confirmation field
if ($_POST["password"] !== $_POST["password_confirmation"]){
    echo("Passwords must match"  . "<br>" );
}

//create password hash for password 
$password= password_hash($_POST["password"], PASSWORD_DEFAULT);

//connect database
$mysqli = require __DIR__ . "/signupdatabase.php";


//insert information into table
$sql = "INSERT INTO user (name, email, password) 
        VALUES(?, ?, ?)";

//create prepared statement using stmt_init method
$stmt = $mysqli->stmt_init();

//call the prepare method
$stmt->prepare($sql);

if (! $stmt->prepare($sql)){
    echo("SQL error:" . $mysqli->error);
}

//bind statement param
//since all 3 values are strings, put (sss) as first argument
$stmt->bind_param("sss", 
$_POST["name"],
$_POST["email"],
//$_POST["password"]
$password
);

//if everything is executed well, redirect to signup success page
if ($stmt->execute()) {
   
    header("Location: signup-success.php");
} 

else {
    echo "Error: " . $mysqli->error;
}





//print inputted data
print_r($_POST);
//var_dump($password_hash);

//check if information was inserted or not 
if ($stmt->affected_rows > 0) {
    echo "Rows inserted: " . $stmt->affected_rows;
} else {
    echo "No rows inserted";
}


?>