<?php

    require_once "src/Scrabble.php";

    class ScrabbleTest extends PHPUnit_Framework_TestCase
    {
        function test_wordScore()
        {
            // Arrange
            $scrabble_class = new Scrabble();

            $tests = array(
                'quick' => 20,
                'brown' => 10,
                'fox' => 13,
                'jumps' => 16,
                'over' => 7,
                'the' => 6,
                'lazy' => 16,
                'dog' => 5
            );

            foreach ($tests as $input => $expected_output) {
                // Arrange
                $expected_result = array(
                    'input' => $input,
                    'output' => $expected_output
                );

                // Act
                $actual_output = $scrabble_class->wordScore($input);
                $actual_result = array(
                    'input' => $input,
                    'output' => $actual_output
                );

                // Assert
                $this->assertEquals($expected_result, $actual_result);
            }
        }
    }
?>
