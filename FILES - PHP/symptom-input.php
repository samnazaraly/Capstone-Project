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

    <!-- Display the diagnosis result if available -->
    <?php if (isset($_GET['diagnosis'])) : ?>
        <h2>Diagnosis Result:</h2>
        <p><?php echo $_GET['diagnosis']; ?></p>
    <?php endif; ?>
</body>
</html>
