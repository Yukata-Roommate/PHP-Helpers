<?php

use Random\Randomizer;

if (!function_exists("zeroPadding")) {
    /**
     * padding zero to the left of the number
     *
     * @param int $digit
     * @param int|string $num
     * @return string
     */
    function zeroPadding(int $digit, int|string $num): string
    {
        return sprintf("%0" . $digit . "d", $num);
    }
}

if (!function_exists("randomNumber")) {
    /**
     * get random number with specified digit
     *
     * @param int $digit
     * @return int
     */
    function randomNumber(int $digit = 16): int
    {
        $randomizer = new Randomizer();

        return (int)$randomizer->getBytesFromString("0123456789", $digit);
    }
}

if (!function_exists("randomFloat")) {
    /**
     * get random float number
     *
     * @return float
     */
    function randomFloat(): float
    {
        $randomizer = new Randomizer();

        return $randomizer->nextFloat();
    }
}
