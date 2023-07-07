<?php
// Start the session at the beginning of the script
session_start(); 

// Check if a user ID exists in the session (i.e., a user is logged in)
// If not, it redirects the user to the login page
if (!isset($_SESSION['userId'])) {
    header('Location: login.php'); 
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
                <!-- Logo image for the website -->
                <img src="MDAI_LOGO.png" alt="">
            </div>
            <!-- Start of PHP code -->
            <?php
                // If a user ID exists in the session (i.e., a user is logged in)
                // it shows a link to the user's account page
                if (isset($_SESSION['userId'])) {
                    echo '<a href="myaccount.php">My Account</a>';
                } else {
                    // If not, it shows a link to the login page
                    echo '<a href="login.php">Log In</a>';
                }
            ?>
            <!-- End of PHP code -->
        </div>
    </header>
    <main>
        <section class="welcome-section">
            <!-- Greet the user with their username from the session -->
            <h1>Welcome, <?php echo $_SESSION['userName']; ?></h1>
            <p>This is your dashboard.</p>
            <!-- Links to the symptom input and condition input pages -->
            <p>To obtain a list of possible conditions related to one or more symptoms </p>
            <a href="symptom-input.php">click here</a>
            <p>To obtain a list of symptoms related to a specific condition</p>
            <a href="condition-input.php">click here</a>
        </section>
        
        <section class="section-two">
    <!-- Link to log out and end the session -->
    <div class="action-buttons">
        <a href="logout.php">Logout</a>
        <!-- Link to return to the homepage -->
        <a href="home.php">Return to homepage</a>
    </div>
</section>
    </main>
  
    <footer>
    <a href="privacypolicy.php">Privacy Policy</a>
        <a href="contactus.php">Contact Us</a>
        <a href="termsofuse.php">Terms Of Use</a>
    </footer>
</body>
</html>
