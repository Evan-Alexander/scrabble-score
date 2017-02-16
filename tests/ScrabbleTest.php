<?php

    require_once "src/Scrabble.php";

    class ScrabbleTest extends PHPUnit_Framework_TestCase
    {
        function test_wordScore()
        {
            // Arrange
            $scrabble_class = new Scrabble();
            $input = "the";
            $expected_result = 6;

            // Act
            $actual_result = $scrabble_class->wordScore($input);

            // Assert
            $this->assertEquals($expected_result, $actual_result);
        }
    }




?>
