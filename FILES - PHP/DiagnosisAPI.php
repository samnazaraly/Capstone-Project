<?php

class DiagnosisAPI {
    private $symptoms;

    public function __construct($symptoms) {
        $this->symptoms = $symptoms;
    }

    public function makeDiagnosisRequest() {
        $defaultPrompt = "Given the following symptoms: " . $this->symptoms . 
        " please provide a numbered list of possible conditions that could cause these symptoms. 
        Add a line break between each number. ";
        $finalPrompt = $defaultPrompt . $this->symptoms;

        $inputData = [
            "prompt" => $finalPrompt,
            "model" => "text-davinci-002",
            "max_tokens" => 1000
        ];

        $ch = curl_init('https://api.openai.com/v1/completions');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($inputData));
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
            'Authorization: Bearer (enter api key here)'
        ]);

        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            return ['error' => curl_error($ch)];
        }

        return json_decode($response, true);
    }
}
?>
