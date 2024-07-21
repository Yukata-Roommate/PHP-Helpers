<?php

use Random\Randomizer;

if (!function_exists("boolString")) {
    /**
     * convert bool to string
     *
     * @param bool $bool
     */
    function boolString(bool $bool): string
    {
        return $bool ? "true" : "false";
    }
}

if (!function_exists("isRandomTrue")) {
    /**
     * get random bool
     *
     * @param string|int|float $probability
     * @param bool $isPercent
     * @return bool
     */
    function isRandomTrue(string|int|float $probability = 0.5, bool $isPercent = false): bool
    {
        if (is_string($probability)) $probability = (float)$probability;

        if ($probability <= 0) return false;

        if (!$isPercent && $probability >= 1) return true;

        if ($isPercent) $probability /= 100;

        $randomizer = new Randomizer();

        return $randomizer->nextFloat() < $probability;
    }
}
