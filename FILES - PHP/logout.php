<?php
    session_start();
    // Destroy session to log out user
    session_destroy();
    // Redirect to landing page
    header('Location: index.php');
?>
