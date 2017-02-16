<?php
    class Scrabble
    {
        private $letter_scores = array(
            '1' => ['A', 'E', 'I', 'O', 'U', 'L', 'N', 'R', 'S', 'T'],
            '2' => ['D', 'G'],
            '3' => ['B', 'C', 'M', 'P'],
            '4' => ['F', 'H', 'V', 'W', 'Y'],
            '5' => ['K'],
            '8' => ['J', 'X'],
            '10' => ['Q', 'Z']
        );

        function wordScore($input_word)
        {
            $input_word = strtoupper($input_word);
            $input_letters = str_split($input_word);
            $score_keys = array_keys($this->letter_scores);
            $score = 0;

            foreach ($input_letters as $input_letter) {
                foreach ($score_keys as $score_key) {
                    foreach ($this->letter_scores[$score_key] as $scored_letter) {
                        if ($input_letter == $scored_letter) {
                            $score += (integer) $score_key;
                        }
                    }
                }
            }
            return $score;
        }
    }
?>
