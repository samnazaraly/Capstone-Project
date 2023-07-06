<?php
// Start a new or resume existing session
session_start();

// Require the ConditionAPI class and signupdatabase (probably for database connections)
require_once 'ConditionAPI.php';
require_once 'signupdatabase.php';

// Check if the request method is POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get the condition from the POST data
    $condition = $_POST["condition"];

    // Create a new instance of the ConditionAPI with the condition
    $api = new ConditionAPI($condition);

    // Make a request to get the symptoms list
    $response = $api->makeSymptomsListRequest();

    // If there's an error in the response, display the error and stop the script
    if (isset($response['error'])) {
        echo 'Error:' . $response['error'];
        die();
    }

    // Print the response (for debugging purposes)
    echo "<pre>";
    print_r($response);
    echo "</pre>";

    // Get the text of the symptom list from the response
    $symptomlist = $response['choices'][0]['text'];

    // Add a line break after each number in the symptom list
    $symptomlist = preg_replace('/(?<=\d)(?=[a-zA-Z])/i', "<br>", $symptomlist);

    // If a user is logged in, store the search in the search history
    if (isset($_SESSION['userId'])) {  
        // Get the user ID from the session
        $userId = $_SESSION['userId']; 

        // The search term is the condition
        $searchTerm = $condition;

        // Get the current date and time
        $timestamp = date("Y-m-d H:i:s"); 

        // SQL query to insert the search into the search history
        $query = "INSERT INTO search_history (user_id, search_term, timestamp) VALUES (?, ?, ?)";

        // Prepare the SQL statement
        $stmt = $mysqli->prepare($query);

        // Bind the parameters to the SQL statement
        $stmt->bind_param('iss', $userId, $searchTerm, $timestamp);

        // Execute the SQL statement
        $stmt->execute();
    }

    // Redirect to the condition-input page with the symptom list and condition in the query string
    header("Location: condition-input.php?symptomlist=" . urlencode($symptomlist) . "&condition=" . urlencode($condition));
    
    // End the script
    exit;
}
?>
