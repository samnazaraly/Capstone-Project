<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
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
              // Starting a session
              if (isset($_SESSION['userId'])) {
                  // If the session variable 'userId' is set, the user is logged in and the following code is executed
                  echo '<a href="dashboard.php">Dashboard</a>';
                  echo ' | ';
                  echo '<a href="myaccount.php">My Account</a>';
                  echo ' | ';
                  echo '<a href="logout.php">Logout</a>';
                  echo ' | ';
                  echo '<a href="about.php">About</a>';
                  // Links for dashboard, account, logout and about are created
              } else {
                  // If 'userId' is not set, the user is not logged in and the following code is executed
                  echo '<a href="login.php">Log In</a>';
                  echo ' | ';
                  echo '<a href="about.php">About</a>';
                  // Links for login and about are created
              }
          ?>
        </div>
    </header>
    <main>
        <section class="welcome-section">
            <h1>Welcome to AiMD</h1>

            <!-- Carousel of images -->
            <div class="carousel">
                <div class="slide left"><img src="aipatient4.jpeg"></div>
                <div class="slide center"><img src="aidoctor.webp"></div>
                <div class="slide right"><img src="aidoctor2.jpeg"></div>
            </div>
            <!-- Login and Signup links -->
            <p>To explore all our features, <a href="login.php">log in</a></p>
            <p>If you don't have an account, click <a href="signup.php">here</a></p>
        </section>
        <hr>

       <section class="section-two">
        <h1>Who are we?</h1>
        <div class="imgone">
            <img src="aipatient.jpeg">
        </div>
        <p>The future of medical diagnosis</p>

        <p>At AiMD, we're a dedicated team of technologists
            and health enthusiasts united by our shared passion for integrating cutting-edge 
            AI technology with healthcare. 
            Our mission is to revolutionize the way people approach their health, 
            making accurate medical diagnosis accessible and understandable to all, 
            no matter where they are. 
            We believe in empowering our users with knowledge and insights about their health, 
            and we've developed our AI-driven medical diagnosis tool to do just that. 
            Guided by our core values of innovation, integrity, and inclusivity, 
            we're constantly evolving our platform to better serve our users and improve global healthcare standards.
            Together, we're working towards a future where everyone can have instant access to reliable health information, 
            fostering a world where preventative care and early diagnosis are the norm, not the exception.</p>

       </section>
       <hr>
    </main>
    <footer>
        <a href="privacypolicy.php">Privacy Policy</a>
        <a href="contactus.php">Contact Us</a>
        <a href="termsofuse.php">Terms Of Use</a>
    </footer>
</body>
</html>

