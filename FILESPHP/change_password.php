<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <link rel="stylesheet" type="text/css" href="../FILESCSS/changepassword.css">
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
            <!-- Heading for the password change section -->
            <h1>Change Password</h1>

            <!-- Form for the user to submit their current and new passwords -->
            <form action="process-change_password.php" method="post" novalidate>
                <div class="form-group">
                    <!-- Input for the user's current password -->
                    <label for="current_password">Current Password</label>
                    <input type="password" id="current_password" name="current_password">
                </div>

                <div class="form-group">
                    <!-- Input for the user's new password -->
                    <label for="new_password">New Password</label>
                    <input type="password" id="new_password" name="new_password">
                </div>

                <!-- Submit button to process the password change -->
                <button>Change Password</button>
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
