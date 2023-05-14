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
    <h1>Welcome, <?php echo $_SESSION['userName']; ?></h1>
    <p>This is your dashboard.</p>

    <!-- Add the button to redirect to the symptom input page -->
    <p><a href="symptom-input.php">Use the Symptom Checker Tool</a></p>

    <p><a href="logout.php">Logout</a></p> <!-- This will be our logout script -->
</body>
</html>
