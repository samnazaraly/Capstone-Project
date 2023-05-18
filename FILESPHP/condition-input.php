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
        <h2>Based on the symptoms entered above, here is a list of possible conditions you might have:</h2>
        <p><?php echo urldecode($_GET['symptomlist']); ?></p>
    <?php endif; ?>
</body>
</html>
