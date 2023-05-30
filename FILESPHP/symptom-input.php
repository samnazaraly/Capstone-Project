<!DOCTYPE html>
<html>
<head>
    <title>Symptom Input</title>
</head>
<body>
    <h1>Enter Your Symptoms</h1>
    <form action="diagnose.php" method="post">
        <input type="text" name="symptoms" placeholder="Enter your symptoms">
        <button type="submit">Diagnose</button>
    </form>

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

     <p><a href="dashboard.php">Click here to return to dashboard</a></p> 
</body>
</html>
