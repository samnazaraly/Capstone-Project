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
    <link rel="stylesheet" type="text/css" href="../FILESCSS/dashboard.css">
</head>
<body>
    <header>
        <div class="nav-bar">
            <div class="logo">
            <img src="MDAI_LOGO.png" alt="">
            </div>
            <?php
                if (isset($_SESSION['userId'])) {
                    echo '<a href="myaccount.php">My Account</a>';
                } else {
                    echo '<a href="login.php">Log In</a>';
                }
            ?>
        </div>
    </header>
    <main>
        <section class="welcome-section">
            <h1>Welcome, <?php echo $_SESSION['userName']; ?></h1>
            <p>This is your dashboard.</p>
            <!-- Add the buttons to redirect to the symptom input and condition input pages -->
            <p>To obtain a list of possible conditions related to one or more symptoms <a href="symptom-input.php">click here</a></p>
            <p>To obtain a list of symptoms related to a specific condition <a href="condition-input.php">click here</a></p>
        </section>
        
        <section class="section-two">
            <p><a href="logout.php">Logout</a></p>
            <!-- Add a link to return to homepage -->
            <p><a href="home.php">Return to homepage</a></p>
        </section>
    </main>
    <footer>
        <!-- Your Footer Content -->
    </footer>
</body>
</html>
