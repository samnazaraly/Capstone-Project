<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" type="text/css" href="../FILESCSS/home.css">
</head>
<body>
    <header>
        <div class="nav-bar">
            <div class="logo">
                <img src="MDAI_LOGO.png" alt="">
            </div>
            <?php
                // Start or resume a session
                session_start();
                // Check if a user ID exists in the session (i.e., a user is logged in)
                if (isset($_SESSION['userId'])) {
                    // Display navigation links for authenticated users
                    echo '<a href="dashboard.php">Dashboard</a>';
                    echo ' | ';
                    echo '<a href="myaccount.php">My Account</a>';
                    echo ' | ';
                    echo '<a href="logout.php">Logout</a>';
                    echo ' | ';
                    echo '<a href="about.php">About</a>';
                } else {
                    // Display navigation links for visitors
                    echo '<a href="login.php">Log In</a>';
                    echo ' | ';
                    echo '<a href="about.php">About</a>';
                }
            ?>
        </div>
    </header>
    <main>
        <section class="welcome-section">
            <!-- Contact form for users to send messages -->
            <h1>Contact Us</h1>
            <form action="process-contactus.php" method="post">
                <label for="name">Your Name:</label><br>
                <input type="text" id="name" name="name" required><br>
                <label for="email">Your Email:</label><br>
                <input type="email" id="email" name="email" required><br>
                <label for="message">Your Message:</label><br>
                <textarea id="message" name="message" rows="4" cols="50" required></textarea><br>
                <input type="submit" value="Submit">
            </form>
            <p><a href="home.php">Return to homepage</a></p>
        </section>
    </main>
    <footer>
        <a href="privacypolicy.php">Privacy Policy</a>
        <a href="contactus.php">Contact Us</a>
        <a href="termsofuse.php">Terms Of Use</a>
    </footer>
</body>
</html>
