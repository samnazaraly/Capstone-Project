<?php

class ConditionAPI {
    private $condition;

    public function __construct($condition) {
        $this->condition = $condition;
    }

    public function makeSymptomsListRequest() {
        $defaultPrompt = "Given the following specific condition: " . $this->condition . 
        ", provide a detailed and focused numbered list of the top 10 most probable medical symptoms that are directly associated with this condition. 
        Number each condition and add a line break between each one. ";

        $finalPrompt = $defaultPrompt . $this->condition;

        $inputData = [
            "prompt" => $finalPrompt,
            "model" => "text-davinci-002",
            "max_tokens" => 1000,
            "temperature" => 0.1
        ];

        $ch = curl_init('https://api.openai.com/v1/completions');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($inputData));
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
            'Authorization: Bearer (YOUR API KEY HERE)'
        ]);

        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            return ['error' => curl_error($ch)];
        }

        return json_decode($response, true);
    }
}
?>
