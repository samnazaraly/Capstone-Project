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
            <h1>Terms Of Use</h1>
            <p>
Welcome to AiMD. The following terms and conditions govern all use of our website and all content, services, and products available at or through the website.
By accessing or using any part of the website, you agree to become bound by the terms and conditions of this agreement. 
If you do not agree to all the terms and conditions of this agreement, then you may not access the website or use any services.
Our services are designed to help you understand your health better and are aimed at being a valuable resource for informational purposes only. 
The health-related information available through our services is not a substitute for professional medical advice, diagnosis, or treatment. 
Your Responsibilities
As a user of AiMD, you are responsible for all activities that occur under your account. 
You agree not to access or use the services in an unlawful way or for any unlawful purpose or engage in conduct that would impair the functioning and performance of the service.
Intellectual Property:
All content available on the website: text, graphics, logos, images, as well as the compilation thereof, and any software used on the website, is the property of AiMD or its suppliers and protected by copyright and other laws that protect intellectual property and proprietary rights.
Changes:
AiMD reserves the right, at its sole discretion, to modify or replace any part of this Agreement. 
Your continued use of or access to the website following the posting of any changes to this Agreement constitutes acceptance of those changes.
Contact Information:
If you have any questions about these Terms, please contact us at the Contact Us section of the website.

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
