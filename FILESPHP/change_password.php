<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
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
            <h1>Change Password</h1>

            <form action="process-change_password.php" method="post" novalidate>
                <div>
                    <label for="current_password">Current Password</label>
                    <input type="password" id="current_password" name="current_password">
                </div>

                <div>
                    <label for="new_password">New Password</label>
                    <input type="password" id="new_password" name="new_password">
                </div>

                <button>Change Password</button>
            </form>

            <p><a href="myaccount.php">Return to My Account</a></p>
        </section>
    </main>
    <footer>
        <!-- Your Footer Content -->
    </footer>
</body>
</html>
