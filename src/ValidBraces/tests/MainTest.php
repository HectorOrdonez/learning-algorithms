<?php

namespace HectorOrdonez\LearningAlgorithms\ValidBraces\tests;

use HectorOrdonez\LearningAlgorithms\ValidBraces\Main;
use PHPUnit\Framework\TestCase;

class MainTest extends TestCase
{
    /**
     * @test
     */
    public function it_returns_true_when_closing_curly_brackets_correctly()
    {
        // Arrange
        $str = '{}';

        // Act
        $result = (new Main())->isValid($str);

        // Assert
        $this->assertSame(true, $result);
    }

    /**
     * @test
     */
    public function it_returns_true_when_closing_brackets_correctly()
    {
        // Arrange
        $str = '[]';

        // Act
        $result = (new Main())->isValid($str);

        // Assert
        $this->assertSame(true, $result);
    }

    /**
     * @test
     */
    public function it_returns_true_when_closing_parenthesis_correctly()
    {
        // Arrange
        $str = '()';

        // Act
        $result = (new Main())->isValid($str);

        // Assert
        $this->assertSame(true, $result);
    }
}
