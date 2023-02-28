<?php

namespace HectorOrdonez\LearningAlgorithms\ValidBraces;

class Main
{
    /**
     * String will never be empty.
     *
     * String might contain {, [ and ( and the function should return true if these are closed in the correct order.
     * For instance {}, [] and [{}] are correct, but {[}] is not.
     *
     * @param string $braces
     * @return bool
     */
    public function isValid(string $braces): bool
    {
        $validBraces = [
            ')' => '(',
            ']' => '[',
            '}' => '{',
        ];

        $last = [];

        foreach (str_split($braces) as $char) {
            if (array_key_exists($char, $validBraces)) {
                if (count($last) > 0 && $last[count($last) - 1] === $validBraces[$char]) {
                    array_pop($last);
                } else {
                    return false;
                }
            } else {
                $last[] = $char;
            }
        }

        if (count($last) > 0) {
            return false;
        }
        return true;
    }

}
