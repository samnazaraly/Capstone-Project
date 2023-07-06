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

        //start or resume session 
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
            <p>
            At AiMD, we are committed to safeguarding your privacy. This Privacy Policy describes how we manage, process and store personal data submitted in the context of providing our services. "Personal data" refers to any information relating to an identifiable individual or his/her personal identity.<br><br>
        <br>
            In the course of using our website (the "Services"), we may ask you to provide us with certain personally identifiable information that can be used to contact or identify you. Personally identifiable information may include, but is not limited to, your name, email address, postal address and phone number ("Personal Information").<br><br>
        <br>
            The information we collect is used to improve the content of our website, customize the content and/or layout of our page for each individual visitor, and used to notify consumers about updates to our website, shared with agents or contractors who assist in providing support for our internal operations, disclosed when legally required to do so, at the request of governmental authorities conducting an investigation, to verify or enforce compliance with the policies governing our website and applicable laws or to protect against misuse or unauthorized use of our website.<br><br>
        <br>
            We use "cookies" on this site. A cookie is a piece of data stored on a site visitor's hard drive to help us improve your access to our site and identify repeat visitors to our site.<br><br>
        <br>
            We may update this privacy policy from time to time in order to reflect changes to our practices or for other operational, legal, or regulatory reasons. We encourage you to review this privacy policy frequently to be informed of how AiMD is protecting your information.<br><br>
        <br>
            For more information about our privacy practices, if you have questions, or if you would like to make a complaint, please visit our Contact Us page for further details.
            </p>
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
