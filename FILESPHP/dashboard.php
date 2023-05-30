<?php
session_start(); // Start the session at the beginning of the script

// Check if user is logged in
if (!isset($_SESSION['userId'])) {
    header('Location: login.php'); // Redirect to login page if not logged in
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Dashboard</title>
</head>
<body>

<!--reference to my account page-->
<a href="myaccount.php">My Account</a>


    <h1>Welcome, <?php echo $_SESSION['userName']; ?></h1>
    <p>This is your dashboard.</p>

    <!-- Add the button to redirect to the symptom input page -->
    <p>To obtain a list of possible conditions related to one or more symptoms <a href="symptom-input.php">click here</a></p>


    <!-- Add the button to redirect to the symptom list page for condition input-->
    <p>To obtain a list of symptoms related to a specific condition <a href="condition-input.php">click here</a></p>

    <p><a href="logout.php">Logout</a></p> <!-- This will be our logout script -->

    <!-- add link to return to homepage-->
    <p><a href="home.php">Return to homepage</p>



</body>
</html>
