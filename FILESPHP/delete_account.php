<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Account</title>

    <link rel="stylesheet" type="text/css" href="../FILESCSS/deleteaccount.css">
</head>
<body>
    <header>
        <div class="nav-bar">
            <div class="logo">
                <!-- Logo image for the website -->
                <img src="MDAI_LOGO.png" alt="logo">
            </div>

            <!-- Link to user's account page -->
            <a href="myaccount.php">My Account</a>
        </div>
    </header>

    <main>
        <section class="account-section">
            <!-- Header for delete account section -->
            <h1>Delete Account</h1>

            <!-- Warning message about account deletion -->
            <p>Are you sure you want to delete your account? This action cannot be undone.</p>

            <!-- Form to process account deletion -->
            <form action="process-delete_account.php" method="post">
                <!-- Confirmation button for account deletion -->
                <button type="submit">Yes, Delete My Account</button>
            </form>

            <!-- Link to return to user's account page -->
            <p><a href="myaccount.php">No, Return to My Account</a></p>
        </section>
    </main>

    <!-- Footer links to legal information -->
    <footer>
    <a href="privacypolicy.php">Privacy Policy</a>
        <a href="contactus.php">Contact Us</a>
        <a href="termsofuse.php">Terms Of Use</a>
    </footer>
</body>
</html>
