<?php

class DiagnosisAPI {
    private $symptoms;

    public function __construct($symptoms) {
        $this->symptoms = $symptoms;
    }

    public function makeDiagnosisRequest() {
        $defaultPrompt = "Given the following specific symptoms: " . $this->symptoms . 
        ", provide a detailed and focused list of the top 10 most probable medical conditions that are directly associated with ALL these symptoms combined. 
        Please make sure each condition comprehensively accounts for all the mentioned symptoms. Number each condition and add a line break between each one. 
        Make sure the list is in the same language as the prompt, for example, if the symptoms are in french make sure the conditions are also provided in french";

        $finalPrompt = $defaultPrompt . $this->symptoms;

        $inputData = [
            "prompt" => $finalPrompt,
            "model" => "text-davinci-002",
            "max_tokens" => 1000,
            "temperature" => 0.3
        ];

        $ch = curl_init('https://api.openai.com/v1/completions');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($inputData));
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
            'Authorization: Bearer '
        ]);

        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            return ['error' => curl_error($ch)];
        }

        return json_decode($response, true);
    }
}
?>
