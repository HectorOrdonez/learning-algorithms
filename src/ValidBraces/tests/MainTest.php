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

    /**
     * @test
     */
    public function it_returns_false_when_it_starts_with_closing_char()
    {
        // Arrange
        $str = '}';

        // Act
        $result = (new Main())->isValid($str);

        // Assert
        $this->assertFalse($result);
    }

    /**
     * @test
     */
    public function it_returns_true_when_opening_and_closing_twice_in_correct_order()
    {
        // Arrange
        $str = '(){}';

        // Act
        $result = (new Main())->isValid($str);

        // Assert
        $this->assertTrue($result);
    }

    /**
     * @test
     */
    public function it_returns_true_when_opening_and_closing_one_inside_the_other()
    {
        // Arrange
        $str = '({})';

        // Act
        $result = (new Main())->isValid($str);

        // Assert
        $this->assertTrue($result);
    }

    /**
     * @test
     */
    public function it_returns_false_when_multiple_incorrect_ones()
    {
        // Arrange
        $str = '[({})](]';

        // Act
        $result = (new Main())->isValid($str);

        // Assert
        $this->assertFalse($result);
    }

    /**
     * @dataProvider examples
     * @test
     */
    public function it_returns_when_incorrect_ones($str, $expected)
    {
        // Act
        $result = (new Main())->isValid($str);

        // Assert
        $this->assertSame($expected, $result);
    }

    public function examples()
    {
        return [
            ["(){}[]", true],
            ["([{}])", true],
            ["(}", false],
            ["[(])", false],
            ["[({})](]", false],
            ["((((()))))", true],
            ["(((((())))", false],
        ];
    }
}
