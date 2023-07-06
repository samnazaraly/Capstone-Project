<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
require_once __DIR__ . '/../../FILESPHP/ConditionAPI.php'; // Adjusted namespace

class ConditionAPITest extends TestCase
{
    /**
     * Test the makeSymptomsListRequest method
     */
    public function test_makeSymptomsListRequest()
    {
        $condition = "torn acl";
        $conditionAPI = new \ConditionAPI($condition); // Instantiate the ConditionAPI class

        $response = $conditionAPI->makeSymptomsListRequest();

        // Check if the response is an array (the method should return an array of symptoms options)
        $this->assertIsArray($response);

        // Check if the response contains the expected symptoms options
        $this->assertStringContainsString('Swelling', $response['choices'][0]['text']);
    }
}
