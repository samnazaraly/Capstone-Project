<?php

// Class to handle the interaction with the DiagnosisAPI
class DiagnosisAPI {
    // Private property to hold the symptoms
    private $symptoms;

    // Constructor that accepts the symptoms as a parameter
    public function __construct($symptoms) {
        $this->symptoms = $symptoms;
    }

    // Method to make the request to the Diagnosis API
    public function makeDiagnosisRequest() {
        // Preparing the prompt to send to the API
        $defaultPrompt = "Given the following specific symptoms: " . $this->symptoms . 
        ", provide a detailed and focused list of the top 10 most probable medical conditions that are directly associated with ALL these symptoms combined. 
        Please make sure each condition comprehensively accounts for all the mentioned symptoms. Number each condition and add a line break between each one. 
        Make sure the list is in the same language as the prompt, for example, if the symptoms are in french make sure the conditions are also provided in french. Also add the probability of each condition as a percentage (example: migrane: 50%)";

        // Combining the default prompt with the symptoms
        $finalPrompt = $defaultPrompt . $this->symptoms;

        // Creating the data to send to the API
        $inputData = [
            "prompt" => $finalPrompt,
            "model" => "text-davinci-002",
            "max_tokens" => 1000,
            "temperature" => 0.3
        ];

        // Initializing the cURL session
        $ch = curl_init('https://api.openai.com/v1/completions');
        
        // Setting options for the cURL session
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($inputData));
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
        
            //enter CHATGPT API KEY HERE 
            'Authorization: Bearer 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'
        ]);

        // Executing the cURL session and getting the response
        $response = curl_exec($ch);

        // Checking if there's an error with the cURL session
        if (curl_errno($ch)) {
            // Returning an array with the error
            return ['error' => curl_error($ch)];
        }

        // Decoding the JSON response and returning it
        return json_decode($response, true);
    }
}
?>
