<!DOCTYPE html>
<html>
<head>
    <title>Condition Input</title>
    <link rel="stylesheet" type="text/css" href="../FILESCSS/condition-input.css">
</head>
<body>
    <header>
        <div class="nav-bar">
            <!-- Website logo -->
            <div class="logo">
            <img src="MDAI_LOGO.png" alt="">
            </div>
            <!-- PHP script that starts the session and dynamically generates navigation links -->
            <?php
                session_start();
                if (isset($_SESSION['userId'])) {
                    echo '<a href="dashboard.php">Dashboard</a>';
                    echo ' | ';
                    echo '<a href="myaccount.php">My Account</a>';
                } else {
                    echo '<a href="login.php">Log In</a>';
                }
            ?>
        </div>
    </header>
    <main>
        <section class="welcome-section">
            <!-- Form where user can input their condition -->
            <h1>Enter Your Condition</h1>
            <form action="conditionsymptoms.php" method="post">
                <input type="text" name="condition" placeholder="Enter your condition">
                <button type="submit">View Symptoms</button>
            </form>
        </section>

        <!-- If a condition is provided, display the condition entered -->
        <?php if (isset($_GET['condition'])) : ?>
            <section class="section-two">
                <h2>Condition Entered:</h2>
                <p><?php echo urldecode($_GET['condition']); ?></p>
            </section>
        <?php endif; ?>

        <!-- If a diagnosis result is available, display the diagnosis result -->
        <?php if (isset($_GET['symptomlist'])) : ?>
            <section class="section-two">
                <h2>Here is a list of symptoms associated to the condition entered:</h2>
                <p><?php echo urldecode($_GET['symptomlist']); ?></p>
            </section>
        <?php endif; ?>

        <section class="welcome-section">
            <!-- Link to return to the dashboard -->
            <p><a href="dashboard.php">Click here to return to dashboard</a></p>
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
