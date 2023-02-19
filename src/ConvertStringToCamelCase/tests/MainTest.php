<?php

namespace HectorOrdonez\LearningAlgorithms\ConvertStringToCamelCase\tests;

use HectorOrdonez\LearningAlgorithms\ConvertStringToCamelCase\Main;
use PHPUnit\Framework\TestCase;

class MainTest extends TestCase
{
    /**
     * @test
     */
    public function it_returns_empty_string_when_passing_empty_string()
    {
        // Arrange
        $str = '';
        $main = new Main();

        // Act
        $result = $main->toCamelCase($str);

        // Assert
        $this->assertEmpty($result);
    }

    /**
     * @test
     */
    public function it_does_not_change_the_string_when_it_input_has_no_dashes()
    {
        // Arrange
        $str = 'example';
        $main = new Main();

        // Act
        $result = $main->toCamelCase($str);

        // Assert
        $this->assertSame($str, $result);
    }

    /**
     * @test
     */
    public function it_capitalises_one_letter_when_input_has_one_dash()
    {
        // Arrange
        $str = 'example-onedash';
        $main = new Main();

        // Act
        $result = $main->toCamelCase($str);

        // Assert
        $this->assertSame('exampleOnedash', $result);
    }


    /**
     * @test
     */
    public function it_capitalises_one_letter_when_input_has_underscore()
    {
        // Arrange
        $str = 'example_oneunderscore';
        $main = new Main();

        // Act
        $result = $main->toCamelCase($str);

        // Assert
        $this->assertSame('exampleOneunderscore', $result);
    }

    /**
     * @test
     * @dataProvider dataProvider
     */
    public function it_capitalises_input($input, $output)
    {
        // Arrange
        $main = new Main();

        // Act
        $result = $main->toCamelCase($input);

        // Assert
        $this->assertSame($output, $result);
    }

    public function dataProvider()
    {
        return [
            ['example-two-dashes', 'exampleTwoDashes'],
            ['example-three-different-dashes', 'exampleThreeDifferentDashes'],
            ['example-three-different-dashes', 'exampleThreeDifferentDashes'],
            ['example-two-dashes', 'exampleTwoDashes'],
            ['example-three-different-dashes', 'exampleThreeDifferentDashes'],
            ['example-combination_of_dashes-and_underscores', 'exampleCombinationOfDashesAndUnderscores'],
        ];
    }
}
