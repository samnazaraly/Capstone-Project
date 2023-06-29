<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Symptom Input</title>
    <link rel="stylesheet" type="text/css" href="../FILESCSS/condition-input.css">
</head>
<body>
    <header>
        <div class="nav-bar">
            <div class="logo">
                <img src="MDAI_LOGO.png" alt="logo">
            </div>
            <a href="dashboard.php">Dashboard</a>
        </div>
    </header>

    <main>
        <section class="welcome-section">
            <h1>Enter Your Symptoms</h1>
            <form action="diagnose.php" method="post">
                <input type="text" name="symptoms" placeholder="Enter your symptoms">
                <button type="submit">Diagnose</button>
            </form>

            <p><a href="dashboard.php">Click here to return to dashboard</a></p> 

            <!-- Display the symptoms entered if available -->
            <?php if (isset($_GET['symptoms'])) : ?>
                <h2>Symptoms Entered:</h2>
                <p><?php echo urldecode($_GET['symptoms']); ?></p>
            <?php endif; ?>

            <!-- Display the diagnosis result if available -->
            <?php if (isset($_GET['diagnosis'])) : ?>
                <h2>Here is a list of conditions associated to the symptoms entered above: </h2>
                <p><?php echo urldecode($_GET['diagnosis']); ?></p>
            <?php endif; ?>
        </section>
    </main>

    <footer>
        <a href="privacypolicy.php">Privacy Policy</a>
        <a href="contactus.php">Contact Us</a>
        <a href="termsofuse.php">Terms Of Use</a>
    </footer>
</body>
</html>
