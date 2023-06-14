<?php
session_start();

require_once 'ConditionAPI.php';
require_once 'signupdatabase.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $condition = $_POST["condition"];
    $api = new ConditionAPI($condition);
    $response = $api->makeSymptomsListRequest();

    if (isset($response['error'])) {
        echo 'Error:' . $response['error'];
        die();
    }

    echo "<pre>";
    print_r($response);
    echo "</pre>";

    $symptomlist = $response['choices'][0]['text'];
    $symptomlist = preg_replace('/(?<=\d)(?=[a-zA-Z])/i', "<br>", $symptomlist);

    // Store the search in the search history after successful symptom list request
    if (isset($_SESSION['userId'])) {  // Check if user is logged in
        $userId = $_SESSION['userId']; 
        $searchTerm = $condition;
        $timestamp = date("Y-m-d H:i:s"); 

        $query = "INSERT INTO search_history (user_id, search_term, timestamp) VALUES (?, ?, ?)";
        $stmt = $mysqli->prepare($query);
        $stmt->bind_param('iss', $userId, $searchTerm, $timestamp);
        $stmt->execute();
    }

    header("Location: condition-input.php?symptomlist=" . urlencode($symptomlist) . "&condition=" . urlencode($condition));
    exit;
}
?>
