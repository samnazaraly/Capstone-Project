<!DOCTYPE html>
<html>
<head>
    <title>Condition Input</title>
    <link rel="stylesheet" type="text/css" href="condition-input.css">
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
                } else {
                    echo '<a href="login.php">Log In</a>';
                }
            ?>
        </div>
    </header>
    <main>
        <section class="welcome-section">
            <h1>Enter Your Condition</h1>
            <form action="conditionsymptoms.php" method="post">
                <input type="text" name="condition" placeholder="Enter your condition">
                <button type="submit">View Symptoms</button>
            </form>
        </section>

        <!-- Display the condition entered if available -->
        <?php if (isset($_GET['condition'])) : ?>
            <section class="section-two">
                <h2>Condition Entered:</h2>
                <p><?php echo urldecode($_GET['condition']); ?></p>
            </section>
        <?php endif; ?>

        <!-- Display the diagnosis result if available -->
        <?php if (isset($_GET['symptomlist'])) : ?>
            <section class="section-two">
                <h2>Here is a list of symptoms associated to the condition entered:</h2>
                <p><?php echo urldecode($_GET['symptomlist']); ?></p>
            </section>
        <?php endif; ?>

        <section class="welcome-section">
            <p><a href="dashboard.php">Click here to return to dashboard</a></p>
        </section>
    </main>
    <footer>
        <!-- Your Footer Content -->
    </footer>
</body>
</html>
