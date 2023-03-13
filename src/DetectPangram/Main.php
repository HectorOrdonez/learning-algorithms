<?php

namespace HectorOrdonez\LearningAlgorithms\DetectPangram;

class Main
{
    public function isPangram(string $str): bool
    {
        $regExp = implode(')(?=.*', str_split('abcdefghijklmnopqrstuvwxyz'));

        return preg_match("/(?=.*$regExp)/im", $str);
    }
}
