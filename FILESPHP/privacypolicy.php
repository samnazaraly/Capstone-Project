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
            <div class="logo">
                <img src="MDAI_LOGO.png" alt="">
            </div>
        <?php
            session_start();
            if (isset($_SESSION['userId'])) {
                echo '<a href="dashboard.php">Dashboard</a>';
                echo ' | ';
                echo '<a href="myaccount.php">My Account</a>';
                echo ' | ';
                echo '<a href="logout.php">Logout</a>';
                echo ' | ';
                echo '<a href="about.php">About</a>';
            } else {
                echo '<a href="login.php">Log In</a>';
                echo ' | ';
                echo '<a href="about.php">About</a>';
            }
        ?>
        </div>
    </header>
    <main>
        <section class="welcome-section">
            <h1>Privacy Policy</h1>
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
