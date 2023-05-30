<!DOCTYPE html>
<html>
<head>
    <title>Condition Input</title>
</head>
<body>
    <h1>Enter Your Condition</h1>
    <form action="conditionsymptoms.php" method="post">
        <input type="text" name="condition" placeholder="Enter your condition">
        <button type="submit">View Symptoms</button>
    </form>

    <!-- Display the condition entered if available -->
    <?php if (isset($_GET['condition'])) : ?>
        <h2>Condition Entered:</h2>
        <p><?php echo urldecode($_GET['condition']); ?></p>
    <?php endif; ?>

    <!-- Display the diagnosis result if available -->
    <?php if (isset($_GET['symptomlist'])) : ?>
        <h2>Here is a list of symptoms associated to the condition entered:</h2>
        <p><?php echo urldecode($_GET['symptomlist']); ?></p>
    <?php endif; ?>

    <p><a href="dashboard.php">Click here to return to dashboard</a></p> 
</body>
</html>
