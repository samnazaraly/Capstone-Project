<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Account</title>
    <link rel="stylesheet" type="text/css" href="../FILESCSS/myaccount.css">
</head>
<body>
    <header>
        <div class="nav-bar">
            <div class="logo">
                <img src="MDAI_LOGO.png" alt="logo">
            </div>
            <a href="myaccount.php">My Account</a>
        </div>
    </header>

    <main>
        <section class="account-section">
            <h1>Delete Account</h1>

            <p>Are you sure you want to delete your account? This action cannot be undone.</p>

            <form action="process-delete_account.php" method="post">
                <button type="submit">Yes, Delete My Account</button>
            </form>

            <p><a href="myaccount.php">No, Return to My Account</a></p>
        </section>
    </main>
    <footer>
    <a href="privacypolicy.php">Privacy Policy</a>
        <a href="contactus.php">Contact Us</a>
        <a href="termsofuse.php">Terms Of Use</a>
    </footer>
</body>
</html>
