<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
require_once __DIR__ . "/DiagnosisAPI.php"; // Adjusted namespace

class DiagnosisAPITest extends TestCase
{
    /**
     * Test the makeDiagnosisRequest method
     */
    public function test_makeDiagnosisRequest()
    {
        $symptoms = "cough";
        $diagnosisAPI = new \DiagnosisAPI($symptoms); // Instantiate the DiagnosisAPI class

        $response = $diagnosisAPI->makeDiagnosisRequest();

        // Check if the response is a string (the method should return the diagnosis string)
        $this->assertIsString($response);

        // Check if the response contains some expected diagnoses
        $this->assertStringContainsString('common cold', $response);
        $this->assertStringContainsString('Pneumonia', $response);
    }
}
