<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" type="text/css" href="../FILESCSS/home.css">
</head>
<body>
    <header>
        <div class="nav-bar">
            <!-- Website logo -->
            <div class="logo">
                <img src="MDAI_LOGO.png" alt="">
            </div>
        <!-- Start a new session or resume existing session -->
        <?php
            session_start();
            // If the user is logged in, display these links
            if (isset($_SESSION['userId'])) {
                echo '<a href="dashboard.php">Dashboard</a>';
                echo ' | ';
                echo '<a href="myaccount.php">My Account</a>';
                echo ' | ';
                echo '<a href="logout.php">Logout</a>';
                echo ' | ';
                echo '<a href="about.php">About</a>';
            } else {
            // If the user is not logged in, display these links
                echo '<a href="login.php">Log In</a>';
                echo ' | ';
                echo '<a href="about.php">About</a>';
            }
        ?>
        </div>
    </header>
    <main>
        <section class="welcome-section">
            <h1>About Us</h1>
            <p>Founded in 2023, AiMD is committed to revolutionizing the medical field...</p>
            <div class="imgtwo">
                <img src="aipatient2.webp">
            </div>
            <!-- return to homepage -->
            <p><a href="home.php">Return to homepage</a></p>
        </section>
    </main>
    <footer>
        <!-- links to other pages -->
        <a href="privacypolicy.php">Privacy Policy</a>
        <a href="contactus.php">Contact Us</a>
        <a href="termsofuse.php">Terms Of Use</a>
    </footer>
</body>
</html>
