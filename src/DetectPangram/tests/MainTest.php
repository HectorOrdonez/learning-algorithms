<?php

namespace HectorOrdonez\LearningAlgorithms\DetectPangram\tests;

use HectorOrdonez\LearningAlgorithms\DetectPangram\Main;
use PHPUnit\Framework\TestCase;

class MainTest extends TestCase
{
    /**
     * @test
     */
    public function it_returns_false_when_empty_string()
    {
        // Arrange
        $str = '';

        // Act
        $result = (new Main)->isPangram($str);

        // Assert
        $this->assertFalse($result);
    }
}
