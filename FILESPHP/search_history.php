<?php
// Starts a new or resumes existing session
session_start();

// Include the database connection file
require_once 'signupdatabase.php';

// Check if the user is not logged in, then redirect them to the login page
if (!isset($_SESSION['userId'])) {
    header('Location: login.php');
    exit;
}

// Get the logged in user's ID
$userId = $_SESSION['userId'];

// Prepare a SQL query to get search history
$query = "SELECT search_term, timestamp FROM search_history WHERE user_id = ?";

// Prepare the SQL statement
$stmt = $mysqli->prepare($query);

// Error handling for the preparation of the statement
if (!$stmt) {
    printf("Error: %s.\n", $mysqli->$error);
}

// Bind the user ID to the statement
$stmt->bind_param('i', $userId);

// Execute the statement
$stmt->execute();

// Get the result of the statement
$result = $stmt->get_result();

// Fetch all data from the result
$searchHistory = $result->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search History</title>
    <link rel="stylesheet" type="text/css" href="../FILESCSS/search_history.css">
</head>
<body>
    <header>
        <div class="nav-bar">
            <div class="logo">
                <!-- Logo of the company -->
                <img src="MDAI_LOGO.png" alt="">
            </div>
            <?php
                // Checks if the session variable 'userId' is set
                if (isset($_SESSION['userId'])) {
                    // If user is logged in, show dashboard, account, and logout options
                    echo '<a href="dashboard.php">Dashboard</a>';
                    echo ' | ';
                    echo '<a href="myaccount.php">My Account</a>';
                    echo ' | ';
                    echo '<a href="logout.php">Logout</a>';
                } else {
                    // If user is not logged in, show login option
                    echo '<a href="login.php">Log In</a>';
                }
            ?>
        </div>
    </header>
    <main>
        <section>
            <h1>Search History</h1>
            <!-- Loop through search history and display each entry -->
            <?php foreach ($searchHistory as $search) : ?>
                <p>Search: <?php echo $search['search_term']; ?> - Date: <?php echo $search['timestamp']; ?></p>
            <?php endforeach; ?>
        </section>
        <section>
            <!-- Link to return to dashboard and logout -->
            <p><a href="dashboard.php">Click here to return to dashboard</a></p> 
            <p><a href="logout.php">Logout</a></p>
        </section>
    </main>
    <footer>
        <!-- Footer links -->
        <a href="privacypolicy.php">Privacy Policy</a>
        <a href="contactus.php">Contact Us</a>
        <a href="termsofuse.php">Terms Of Use</a>
    </footer>
</body>
</html>
