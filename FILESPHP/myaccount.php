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
    printf("Error: %s.\n", $mysqli->error);
}

$stmt->bind_param('i', $userId);
$stmt->execute();
$result = $stmt->get_result();

$searchHistory = $result->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Account</title>
</head>
<body>
    <h1> My Account</h1>

    <h2>Search History</h2>
    <?php foreach ($searchHistory as $search) : ?>
        <p>Search: <?php echo $search['search_term']; ?> - Date: <?php echo $search['timestamp']; ?></p>
    <?php endforeach; ?>

    <p><a href="logout.php">Logout</a></p>
</body>
</html>
