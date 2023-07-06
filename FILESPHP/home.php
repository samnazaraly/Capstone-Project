<!DOCTYPE html>
<!-- The declaration to use HTML5 -->
<html lang="en">
<!-- Beginning of HTML, setting English as default language -->

<head>
    <!-- Contains meta information about the document -->
    <meta charset="UTF-8">
    <!-- Character encoding for the HTML document is set to UTF-8 -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- The viewport is the user's visible area of a web page. The width=device-width part sets the width of the page to follow the screen-width of the device (which will vary depending on the device). The initial-scale=1 part sets the initial zoom level when the page is first loaded by the browser. -->
    <title>Landing Page</title>
    <!-- The title of the document, shown in the browser's title bar or a page's tab -->
    <link rel="stylesheet" type="text/css" href="../FILESCSS/home.css">
    <!-- Link to external CSS file -->
</head>

<body>
    <!-- Beginning of the visible part of the HTML document -->
    <header>
        <!-- Container for introductory content or a set of navigational links -->
        <div class="nav-bar">
            <!-- Division for navigation bar -->
            <div class="logo">
                <!-- Division for the logo -->
                <img src="MDAI_LOGO.png" alt="">
                <!-- The website logo -->
            </div>
            <!-- Beginning of PHP script for session management -->
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
    <!-- End of header section -->
    <main>
        <!-- Main content of the document -->
        <section class="welcome-section">
            <!-- Welcome section of the webpage -->
            <h1>Welcome to AiMD</h1>
            <!-- Main heading -->

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
        <!-- End of welcome section -->
        <hr>
        <!-- Horizontal rule or line -->

        <!-- Second section (About us) -->
       <section class="section-two">
        <h1>Who are we?</h1>
        <div class="imgone">
            <img src="aipatient.jpeg">
            <!-- Image in the "Who are we?" section -->
        </div>
        <!-- Introductory statement -->
        <p>The future of medical diagnosis</p>

        <!-- Descriptive paragraph about the company -->
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
       <!-- End of "Who are we?" section -->
       <hr>
       <!-- Horizontal rule or line -->
    </main>
    <!-- End of main content -->

    <footer>
        <!-- Footer of the document -->
        <a href="privacypolicy.php">Privacy Policy</a>
        <!-- Link to Privacy Policy page -->
        <a href="contactus.php">Contact Us</a>
        <!-- Link to Contact Us page -->
        <a href="termsofuse.php">Terms Of Use</a>
        <!-- Link to Terms of Use page -->
    </footer>
    <!-- End of footer section -->
</body>
<!-- End of the visible part of the HTML document -->

</html>
<!-- End of HTML -->
