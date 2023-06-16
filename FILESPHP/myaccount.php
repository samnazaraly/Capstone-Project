<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Account</title>
    <link rel="stylesheet" type="text/css" href="../FILESCSS/myaccount.css">
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
              } else {
                  echo '<a href="login.php">Log In</a>';
              }
          ?>
        </div>
    </header>
    <main>
        <section class="account-section">
            <h1> My Account</h1>
            <p><a href="search_history.php">View Search History</p>
            <p><a href="dashboard.php">Click here to return to dashboard</a></p>
            <p><a href="logout.php">Logout</a></p>
        </section>
    </main>
</body>
</html>
