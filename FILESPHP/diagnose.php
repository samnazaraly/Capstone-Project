<?php
session_start();

require_once 'DiagnosisAPI.php';
require_once 'signupdatabase.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $symptoms = $_POST["symptoms"];
    $api = new DiagnosisAPI($symptoms);
    $response = $api->makeDiagnosisRequest();

    if (isset($response['error'])) {
        echo 'Error:' . $response['error'];
        die();
    }

    echo "<pre>";
    print_r($response);
    echo "</pre>";

    $diagnosis = $response['choices'][0]['text'];
    $diagnosis = preg_replace('/(?<=\d)(?=[a-zA-Z])/i', "<br>", $diagnosis);

    // Store the search in the search history after successful diagnosis
    $userId = $_SESSION['userId']; // Assuming user's ID is stored in session
    $searchTerm = $symptoms;
    $timestamp = date("Y-m-d H:i:s"); // Current time

    $query = "INSERT INTO search_history (user_id, search_term, timestamp) VALUES (?, ?, ?)";
    $stmt = $mysqli->prepare($query);
    $stmt->bind_param('iss', $userId, $searchTerm, $timestamp);
    $stmt->execute();

    header("Location: symptom-input.php?diagnosis=" . urlencode($diagnosis) . "&symptoms=" . urlencode($symptoms));
    exit;
}
?>
