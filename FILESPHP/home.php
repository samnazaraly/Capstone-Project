<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" type="text/css" href="home.css">
</head>
<body>
<div class="nav-bar">
<?php
        session_start();
        if (isset($_SESSION['userId'])) {
            echo '<a href="myaccount.php">My Account</a>';
            echo ' | ';
            echo '<a href="logout.php">Logout</a>';
        } else {
            echo '<a href="login.php">Log In</a>';
        }
        ?>
    </div>
    <h1>Welcome to Our Website!</h1>
    <p>To explore all our features, <a href="login.php">log in</a></p>
    <p>If you don't have an account, click <a href="signup.php">here</a></p>
</body>
</html>
