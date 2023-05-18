<?php
require_once 'ConditionAPI.php';

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

    header("Location: condition-input.php?symptomlist=" . urlencode($symptomlist) . "&condition=" . urlencode($condition));
    exit;
}
?>
