<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
require_once __DIR__ . '/../../FILESPHP/DiagnosisAPI.php'; // Adjusted namespace

class DiagnosisAPITest extends TestCase
{
    /**
     * Test the makeDiagnosisRequest method
     */
    public function test_makeDiagnosisRequest()
    {
        $symptoms = "headache";
        $diagnosisAPI = new \DiagnosisAPI($symptoms); // Instantiate the DiagnosisAPI class

        $response = $diagnosisAPI->makeDiagnosisRequest();

        // Check if the response is an array (the method should return an array of diagnosis options)
        $this->assertIsArray($response);

        // Check if the response contains the expected diagnosis options
        $this->assertStringContainsString('Migraine', $response['choices'][0]['text']);
    }
}