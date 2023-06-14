<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" type="text/css" href="home.css">
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
        <section class="welcome-section">
            <h1>Welcome to AiMD</h1>
            <p>To explore all our features, <a href="login.php">log in</a></p>
            <p>If you don't have an account, click <a href="signup.php">here</a></p>
        </section>

        <hr>

       <section class="section-two">
        <h1>Section two</h1>
        <p>The future of medical diagnosis</p>

       </section>

       <hr>
    </main>
    <footer>
        <!-- Your Footer Content -->
    </footer>
</body>
</html>
