<?php

namespace HectorOrdonez\LearningAlgorithms\ConvertStringToCamelCase;

class Main
{
    public function toCamelCase(string $subject): string
    {
        /**
         * Disclaimer: This solution is someone else's idea. I merely used it to learn how it works.
         * It is amazing how much I still have to learn after so many years in this business.
         *
         * This reg expression will:
         * Search for either - or - ...
         * That is followed by one word character
         *
         * Which means the string returned will contain an array of 2 letters:
         * 1) The first one will always be _ or -
         * 2) The second one is the letter to be uppercased
         */
        $expression = '/[-_](\w)/';
        $callback = fn($str) => strtoupper($str[1]);

        return preg_replace_callback($expression, $callback, $subject);
    }
}
