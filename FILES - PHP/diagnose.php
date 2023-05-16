<?php
require_once 'DiagnosisAPI.php';

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

    header("Location: symptom-input.php?diagnosis=" . urlencode($diagnosis) . "&symptoms=" . urlencode($symptoms));
    exit;
}
?>
