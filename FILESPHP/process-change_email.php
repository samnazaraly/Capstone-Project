<?php
session_start();

// check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // get the database connection
    $mysqli = require __DIR__ . "/signupdatabase.php";

    // get the current and new email from form
    $currentEmail = $mysqli->real_escape_string($_POST["email"]);
    $new_email = $mysqli->real_escape_string($_POST["new_email"]);

    // get the user's email from session
    $session_email = $_SESSION['userEmail'];

    // check if the current email matches the one in the session
    if ($currentEmail === $session_email) {
        // update the email in the database
        $sql = "UPDATE user SET email = '$new_email' WHERE email = '$currentEmail'";

        if ($mysqli->query($sql) === TRUE) {
            // update the email in the session
            header('Location: email_changed.php');
            $_SESSION['userEmail'] = $new_email;
        } else {
            echo "Error updating email: " . $mysqli->error;
        }
    } else {
        echo "The current email is incorrect";
    }
} else {
    echo "No form submission detected";
}
?>
