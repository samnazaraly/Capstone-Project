<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Email</title>
    <link rel="stylesheet" type="text/css" href="../FILESCSS/changeemail.css">
</head>
<body>
    <header>
        <div class="nav-bar">
            <!-- Website logo -->
            <div class="logo">
                <img src="MDAI_LOGO.png" alt="logo">
            </div>
            <!-- Link to the My Account page -->
            <a href="myaccount.php">My Account</a>
        </div>
    </header>

    <!-- The main content of the webpage -->
    <main>
        <section class="account-section">
            <!-- Heading for the email change section -->
            <h1>Change Email</h1>

            <?php 
            // Start the session and retrieve the current user's email
            session_start(); 
            $currentEmail = isset($_SESSION['userEmail']) ? $_SESSION['userEmail'] : '';
            ?>

            <!-- Form for the user to submit their new email -->
            <form action="process-change_email.php" method="post" novalidate>
                <div class="form-group">
                    <!-- Display the user's current email (read-only) -->
                    <label for="email">Current Email</label>
                    <input type="text" id="email" name="email" value="<?php echo $currentEmail; ?>" readonly>
                </div>

                <div class="form-group">
                    <!-- Input for the user's new email -->
                    <label for="new_email">New Email</label>
                    <input type="text" id="new_email" name="new_email">
                </div>

                <!-- Submit button to process the email change -->
                <button>Change Email</button>
            </form>

            <!-- Link to return to the My Account page -->
            <p><a href="myaccount.php">Return to My Account</a></p>
        </section>
    </main>
    <!-- The footer of the webpage with useful links -->
    <footer>
        <a href="privacypolicy.php">Privacy Policy</a>
        <a href="contactus.php">Contact Us</a>
        <a href="termsofuse.php">Terms Of Use</a>
    </footer>
</body>
</html>
