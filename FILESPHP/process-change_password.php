<?php
session_start();

// check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // get the database connection
    $mysqli = require __DIR__ . "/signupdatabase.php";

    // get the current password and new password from form
    // look at current and new password they entered 
    $currentPassword = $_POST["current_password"];
    $newPassword = $_POST["new_password"];

    // get the user's id from session
    $userId = $_SESSION['userId'];

    // get the user's current password from the database
    $sql = "SELECT password FROM user WHERE id = '$userId'";
    $result = $mysqli->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $dbPassword = $row["password"];
        }
    } else {
        echo "No user found";
        exit;
    }

    // check if the current password matches the one in the database
    if (password_verify($currentPassword, $dbPassword)) {
        // update the password in the database
        $newPasswordHash = password_hash($newPassword, PASSWORD_DEFAULT);
        $sql = "UPDATE user SET password = '$newPasswordHash' WHERE id = '$userId'";

        if ($mysqli->query($sql) === TRUE) {
            // redirect to the password_changed.php
            header('Location: password_changed.php');
        } else {
            echo "Error updating password: " . $mysqli->error;
        }
    } else {
        echo "The current password is incorrect";
    }
} else {
    echo "No form submission detected";
}
?>
