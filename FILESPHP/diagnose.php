<?php
// Starting session
session_start();

// Including the files for the DiagnosisAPI class and database connection
require_once 'DiagnosisAPI.php';
require_once 'signupdatabase.php';

// Checking if the request method is POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Getting symptoms from POST request
    $symptoms = $_POST["symptoms"];

    // Creating a new instance of the DiagnosisAPI with the provided symptoms
    $api = new DiagnosisAPI($symptoms);

    // Making a diagnosis request and getting the response
    $response = $api->makeDiagnosisRequest();

    // Checking if there's an error in the response
    if (isset($response['error'])) {
        // Displaying the error and ending the script
        echo 'Error:' . $response['error'];
        die();
    }

    // Printing the response in a readable format
    echo "<pre>";
    print_r($response);
    echo "</pre>";

    // Getting the diagnosis from the response
    $diagnosis = $response['choices'][0]['text'];

    // Formatting the diagnosis (adding a line break between a digit and a letter)
    $diagnosis = preg_replace('/(?<=\d)(?=[a-zA-Z])/i', "<br>", $diagnosis);

    // Storing the search in the search history after successful diagnosis
    $userId = $_SESSION['userId']; // Assuming user's ID is stored in session
    $searchTerm = $symptoms;
    $timestamp = date("Y-m-d H:i:s"); // Getting the current date and time

    // Preparing the SQL query to insert data into search_history
    $query = "INSERT INTO search_history (user_id, search_term, timestamp) VALUES (?, ?, ?)";
    $stmt = $mysqli->prepare($query);

    // Binding parameters to the SQL query and executing the query
    $stmt->bind_param('iss', $userId, $searchTerm, $timestamp);
    $stmt->execute();

    // Redirecting to the symptom-input.php page with diagnosis and symptoms as GET parameters
    header("Location: symptom-input.php?diagnosis=" . urlencode($diagnosis) . "&symptoms=" . urlencode($symptoms));
    exit;
}
?>
