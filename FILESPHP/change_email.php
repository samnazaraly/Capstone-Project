<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Email</title>
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
            <h1>Change Email</h1>

            <?php 
            session_start(); // Start the session
            $currentEmail = isset($_SESSION['userEmail']) ? $_SESSION['userEmail'] : '';
            ?>

            <form action="process-change_email.php" method="post" novalidate>
                <div>
                    <label for="email">Current Email</label>
                    <input type="text" id="email" name="email" value="<?php echo $currentEmail; ?>" readonly>
                </div>

                <div>
                    <label for="new_email">New Email</label>
                    <input type="text" id="new_email" name="new_email">
                </div>

                <button>Change Email</button>
            </form>

            <p><a href="myaccount.php">Return to My Account</a></p>
        </section>
    </main>
    <footer>
        <!-- Your Footer Content -->
    </footer>
</body>
</html>
