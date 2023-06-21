<?php
session_start();

if (isset($_SESSION['userId'])) {
    $userId = $_SESSION['userId'];

    // get the database connection
    $mysqli = require __DIR__ . "/signupdatabase.php";

    // create the SQL query to delete the user
    $sql = "DELETE FROM user WHERE id = $userId";

    // execute the query
    if ($mysqli->query($sql) === TRUE) {
        // destroy the session
        session_destroy();
        // redirect to a page indicating the account has been deleted
        header('Location: account_deleted.php');
    } else {
        echo "Error deleting account: " . $mysqli->error;
    }
} else {
    // redirect to login page if the user is not logged in
    header('Location: login.php');
}
?>
