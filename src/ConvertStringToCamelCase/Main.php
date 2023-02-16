<?php

namespace HectorOrdonez\LearningAlgorithms\ConvertStringToCamelCase;

class Main
{
    public function toCamelCase($str)
    {
        $str = $this->searchAndUpperCase($str, '-');
        return $this->searchAndUpperCase($str, '_');
    }

    /**
     * Searches given needle in given string, removing found needles in string and upper-casing next letter
     *
     * @param string $str
     * @param string $needle
     * @return string
     */
    private function searchAndUpperCase(string $str, string $needle): string
    {
        while ($position = strpos($str, $needle)) {
            $str[$position + 1] = strtoupper($str[$position + 1]);

            $str = $this->removeCharInPosition($str, $position);
        }

        return $str;
    }

    private function removeCharInPosition(string $str, int $pos): string
    {
        $leftPiece = substr($str, 0, $pos);
        $rightPiece = substr($str, $pos + 1, strlen($str) - $pos);

        return $leftPiece . $rightPiece;
    }
}
