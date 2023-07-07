<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Making the webpage responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Account</title>
    <!-- Link to the external CSS file -->
    <link rel="stylesheet" type="text/css" href="../FILESCSS/myaccount.css">
</head>
<body>
    <header>
        <div class="nav-bar">
            <div class="logo">
                <!-- Logo of the company -->
                <img src="MDAI_LOGO.png" alt="">
            </div>
            <?php
            // Starts a new or resumes existing session
            session_start();

            // Checks if the session variable 'userId' is set
            if (isset($_SESSION['userId'])) {
                // If user is logged in, show dashboard, account and logout options
                echo '<a href="dashboard.php">Dashboard</a>';
                echo ' | ';
                echo '<a href="myaccount.php">My Account</a>';
                echo ' | ';
                echo '<a href="logout.php">Logout</a>';
            } else {
                // If user is not logged in, show login option
                echo '<a href="login.php">Log In</a>';
            }
            ?>
        </div>
    </header>
    <main>
        <section class="my-account-section">
            <!-- Account options for the user -->
            <h1>My Account</h1>
            <p><a href="change_email.php">Change Email</a></p>
            <p><a href="change_password.php">Change Password</a></p>
            <p><a href="delete_account.php">Delete Account</a></p>
            <p><a href="search_history.php">View Search History</a></p>
        </section>
        <section class="section-two">
            <!-- Links to return to dashboard or logout -->
            <a href="dashboard.php">Return to dashboard</a>
            <a href="logout.php">Logout</a>
        </section>
    </main>
    <footer>
        <!-- Footer links -->
        <a href="privacypolicy.php">Privacy Policy</a>
        <a href="contactus.php">Contact Us</a>
        <a href="termsofuse.php">Terms Of Use</a>
    </footer>
</body>
</html>
