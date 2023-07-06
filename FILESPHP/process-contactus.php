<?php
    session_start(); // start the session at the top of your script

    // Check if form is submitted
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        
        // Get POST data
        $name = $_POST['name'];
        $email = $_POST['email'];

        // Store the confirmation message in a session variable
        $_SESSION['message'] = "Thank you, " . $name . ". Your message has been received. We will get back to you at " . $email . " shortly.";

        // Redirect to the contactformsubmit.php page
        header('Location: contactformsubmit.php');
        exit; // terminate the current script
    }
?>
