<?php

// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $symptoms = $_POST["symptoms"];

    $defaultPrompt = "Given the following symptoms: " . $symptoms . ", please provide a numbered list of possible medical conditions that could cause these symptoms. Add a line break between each number.";
    $finalPrompt = $defaultPrompt . $symptoms;

    // Prepare the input data
    $inputData = [
        "prompt" => $finalPrompt, // Set the prompt to the user's symptoms
        "model" => "text-davinci-002", // The model to use
        "max_tokens" => 1000 // Set the maximum number of tokens for the response
    ];

    // Call the OpenAI API
    $ch = curl_init('https://api.openai.com/v1/completions'); // Update the URL
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($inputData));
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
        'Authorization: Bearer (enter api key here)'
    ]);

    $response = curl_exec($ch);

    $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    echo "HTTP Status Code: " . $httpcode . "<br>";


    if (curl_errno($ch)) {
        echo 'Error:' . curl_error($ch); // Print the error if there is one
        die(); // Stop the script
    }

      // Print the full response
      echo "<pre>";
      print_r(json_decode($response, true));
      echo "</pre>";


    // Get the diagnosis from the response
    $diagnosis = json_decode($response, true)['choices'][0]['text'];

    // Insert a line break before each number
    $diagnosis = preg_replace('/(?<=\d)(?=[a-zA-Z])/i', "<br>", $diagnosis);

    // Redirect back to the symptom input page with the diagnosis result
    header("Location: symptom-input.php?diagnosis=" . urlencode($diagnosis) . "&symptoms=" . urlencode($symptoms));

    exit;
}

?>
