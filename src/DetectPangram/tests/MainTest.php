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

    /**
     * @test
     */
    public function it_returns_true_when_using_alphabet()
    {
        // Arrange
        $str = 'abcdefghijklmnopqrstuvwxyz';

        // Act
        $result = (new Main)->isPangram($str);

        // Assert
        $this->assertTrue($result);
    }

    /**
     * @test
     */
    public function it_returns_false_when_using_partial_alphabet()
    {
        // Arrange
        $str = 'abcdefghijkl';

        // Act
        $result = (new Main)->isPangram($str);

        // Assert
        $this->assertFalse($result);
    }

    /**
     * @test
     */
    public function it_returns_true_when_using_pangram_sentence()
    {
        // Arrange
        $str = 'The quick brown fox jumps over the lazy dog';

        // Act
        $result = (new Main)->isPangram($str);

        // Assert
        $this->assertTrue($result);
    }

    /**
     * @test
     */
    public function it_returns_true_when_using_strange_pangram_sentence()
    {
        // Arrange
        $str = '1L%r+f4G!e7w V z q6M h4d F3b+t O2n e K^g+c#S^i4i X7c-u P5d7j Y6a(a B';

        // Act
        $result = (new Main)->isPangram($str);

        // Assert
        $this->assertTrue($result);
    }
}
