<?php

// Class to interact with OpenAI API for medical symptoms related to a specific condition
class ConditionAPI {
    // Private property for the condition
    private $condition;

    // Constructor to initialize the object with a condition
    public function __construct($condition) {
        $this->condition = $condition;
    }

    // Method to make an API request to get a list of symptoms related to the condition
    public function makeSymptomsListRequest() {
        // Default prompt to send to the API
        $defaultPrompt = "Given the following specific condition: " . $this->condition . 
        ", provide a detailed and focused numbered list of the top 10 most probable medical symptoms that are directly associated with this condition. 
        Number each condition and add a line break between each one. Also add the probability of each condition as a percentage (example: migrane: 50%). ";

        // Final prompt is the default prompt appended with the condition
        $finalPrompt = $defaultPrompt . $this->condition;

        // Data to send in the API request
        $inputData = [
            "prompt" => $finalPrompt, // the prompt to send to the model
            "model" => "text-davinci-002", // the model to use for the request
            "max_tokens" => 1000, // maximum number of tokens to generate
            "temperature" => 0.1 // randomness of the model's output
        ];

        // Initialize cURL session
        $ch = curl_init('https://api.openai.com/v1/completions');
        // Set cURL options
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // return the response as a string
        curl_setopt($ch, CURLOPT_POST, true); // use POST method for the request
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($inputData)); // JSON encoded input data
        curl_setopt($ch, CURLOPT_HTTPHEADER, [ // set HTTP headers
            'Content-Type: application/json',

            //enter ChatGPT API KEY HERE 
            'Authorization: Bearer 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' // API key for authorization
        ]);

        // Execute the cURL request
        $response = curl_exec($ch);

        // If there's an error, return an array with an error key and error message
        if (curl_errno($ch)) {
            return ['error' => curl_error($ch)];
        }

        // If successful, decode and return the response
        return json_decode($response, true);
    }
}

?>
