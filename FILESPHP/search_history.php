<?php
session_start();
require_once 'signupdatabase.php';

if (!isset($_SESSION['userId'])) {
    header('Location: login.php');
    exit;
}

$userId = $_SESSION['userId'];
$query = "SELECT search_term, timestamp FROM search_history WHERE user_id = ?";
$stmt = $mysqli->prepare($query);

if (!$stmt) {
    printf("Error: %s.\n", $mysqli->$error);
}

$stmt->bind_param('i', $userId);
$stmt->execute();
$result = $stmt->get_result();

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
                <img src="MDAI_LOGO.png" alt="">
            </div>
            <?php
                if (isset($_SESSION['userId'])) {
                    echo '<a href="dashboard.php">Dashboard</a>';
                    echo ' | ';
                    echo '<a href="myaccount.php">My Account</a>';
                    echo ' | ';
                    echo '<a href="logout.php">Logout</a>';
                } else {
                    echo '<a href="login.php">Log In</a>';
                }
            ?>
        </div>
    </header>
    <main>
        <section>
            <h1>Search History</h1>
            <?php foreach ($searchHistory as $search) : ?>
                <p>Search: <?php echo $search['search_term']; ?> - Date: <?php echo $search['timestamp']; ?></p>
            <?php endforeach; ?>
        </section>
        <section>
            <p><a href="dashboard.php">Click here to return to dashboard</a></p> 
            <p><a href="logout.php">Logout</a></p>
        </section>
    </main>
    <footer>
        <a href="privacypolicy.php">Privacy Policy</a>
        <a href="contactus.php">Contact Us</a>
        <a href="termsofuse.php">Terms Of Use</a>
    </footer>
</body>
</html>
