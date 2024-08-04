<?php

use Random\Randomizer;

if (!function_exists("removeFromEnd")) {
    /**
     * remove num characters from end of text
     *
     * @param string $text
     * @param int $num
     * @return string
     */
    function removeFromEnd(string $text, int $num): string
    {
        return mb_substr($text, 0, (-1 * $num));
    }
}

if (!function_exists("randomText")) {
    /**
     * get random text of length $length from $source
     *
     * @param string $source
     * @param int $length
     * @return string
     */
    function randomText(string $source, int $length = 16): string
    {
        $randomizer = new Randomizer();

        return $randomizer->getBytesFromString($source, $length);
    }
}

if (!function_exists("randomAlphabet")) {
    /**
     * get random alphabet of length $length
     *
     * @param int $length
     * @return string
     */
    function randomAlphabet(int $length = 16): string
    {
        return randomText("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ", $length);
    }
}

if (!function_exists("randomAlphabetLower")) {
    /**
     * get random lower case alphabet of length $length
     *
     * @param int $length
     * @return string
     */
    function randomAlphabetLower(int $length = 16): string
    {
        return randomText("abcdefghijklmnopqrstuvwxyz", $length);
    }
}

if (!function_exists("randomAlphabetUpper")) {
    /**
     * get random upper case alphabet of length $length
     *
     * @param int $length
     * @return string
     */
    function randomAlphabetUpper(int $length = 16): string
    {
        return randomText("ABCDEFGHIJKLMNOPQRSTUVWXYZ", $length);
    }
}

if (!function_exists("randomPassword")) {
    /**
     * get random password of length $length
     * generated password contains alphabet and number by default
     * if you want to add symbols, set $symbols
     *
     * @param int $length
     * @param string $symbols
     * @return string
     */
    function randomPassword(int $length = 16, string $symbols = ""): string
    {
        return randomText("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789" . $symbols, $length);
    }
}

if (!function_exists("toLower")) {
    /**
     * convert text to lower case
     *
     * @param string $text
     * @return string
     */
    function toLower(string $text): string
    {
        return mb_strtolower($text, "UTF-8");
    }
}

if (!function_exists("toUpper")) {
    /**
     * convert text to upper case
     *
     * @param string $text
     * @return string
     */
    function toUpper(string $text): string
    {
        return mb_strtoupper($text, "UTF-8");
    }
}

if (!function_exists("convertToHalfNumeric")) {
    /**
     * convert text to half-width numeric
     *
     * @param string $text
     * @return string
     */
    function convertToHalfNumeric(string $text): string
    {
        return mb_convert_kana($text, "n");
    }
}

if (!function_exists("replaceNl")) {
    /**
     * replace newline code in text with $replace
     *
     * @param string $text
     * @param string $replace
     * @return string
     */
    function replaceNl(string $text, string $replace): string
    {
        return str_replace(["\r\n", "\n\r", "\r", "\n"], $replace, $text);
    }
}

if (!function_exists("removeNl")) {
    /**
     * remove newline code from text
     *
     * @param string $text
     * @return string
     */
    function removeNl(string $text): string
    {
        return replaceNl($text, "");
    }
}

if (!function_exists("removeSpace")) {
    /**
     * remove space from text
     *
     * @param string $text
     * @return string
     */
    function removeSpace(string $text): string
    {
        return str_replace([" ", "　"], "", $text);
    }
}

if (!function_exists("removeHalfWidthSpace")) {
    /**
     * remove half-width space from text
     *
     * @param string $text
     * @return string
     */
    function removeHalfWidthSpace(string $text): string
    {
        return str_replace(" ", "", $text);
    }
}

if (!function_exists("removeFullWidthSpace")) {
    /**
     * remove full-width space from text
     *
     * @param string $text
     * @return string
     */
    function removeFullWidthSpace(string $text): string
    {
        return str_replace("　", "", $text);
    }
}

if (!function_exists("convertToHalfWidthSpace")) {
    /**
     * convert full-width space to half-width space
     *
     * @param string $text
     * @return string
     */
    function convertToHalfWidthSpace(string $text): string
    {
        return str_replace("　", " ", $text);
    }
}

if (!function_exists("isHiragana")) {
    /**
     * check if text is all hiragana
     *
     * @param string $text
     * @return bool
     */
    function isHiragana(string $text): bool
    {
        return !preg_match("/[^ぁ-んー]/u", $text);
    }
}

if (!function_exists("isKatakana")) {
    /**
     * check if text is all katakana
     *
     * @param string $text
     * @return bool
     */
    function isKatakana(string $text): bool
    {
        return !preg_match("/[^ァ-ヶー]/u", $text);
    }
}

if (!function_exists("isKanji")) {

    /**
     * check if text is all kanji
     *
     * @param string $text
     * @return bool
     */
    function isKanji(string $text): bool
    {
        return !preg_match("/[^一-龠]/u", $text);
    }
}

if (!function_exists("isAlphabet")) {
    /**
     * check if text is all alphabet
     *
     * @param string $text
     * @return bool
     */
    function isAlphabet(string $text): bool
    {
        return !preg_match("/[^a-zA-Z]/u", $text);
    }
}

if (!function_exists("isUpperAlphabet")) {

    /**
     * check if text is all upper case alphabet
     *
     * @param string $text
     * @return bool
     */
    function isUpperAlphabet(string $text): bool
    {
        return !preg_match("/[^A-Z]/u", $text);
    }
}

if (!function_exists("isLowerAlphabet")) {
    /**
     * check if text is all lower case alphabet
     *
     * @param string $text
     * @return bool
     */
    function isLowerAlphabet(string $text): bool
    {
        return !preg_match("/[^a-z]/u", $text);
    }
}

if (!function_exists("isFullWidthAlphabet")) {
    /**
     * check if text is all full-width alphabet
     *
     * @param string $text
     * @return bool
     */
    function isFullWidthAlphabet(string $text): bool
    {
        return !preg_match("/[^ａ-ｚＡ-Ｚ]/u", $text);
    }
}

if (!function_exists("isUpperFullWidthAlphabet")) {
    /**
     * check if text is all upper case full-width alphabet
     *
     * @param string $text
     * @return bool
     */
    function isUpperFullWidthAlphabet(string $text): bool
    {
        return !preg_match("/[^Ａ-Ｚ]/u", $text);
    }
}

if (!function_exists("isLowerFullWidthAlphabet")) {
    /**
     * check if text is all lower case full-width alphabet
     *
     * @param string $text
     * @return bool
     */
    function isLowerFullWidthAlphabet(string $text): bool
    {
        return !preg_match("/[^ａ-ｚ]/u", $text);
    }
}

if (!function_exists("brToNl")) {
    /**
     * convert br tag to newline code
     *
     * @param string $text
     * @return string
     */
    function brToNl(string $text): string
    {
        return preg_replace("/\<br(\s*)?\/?\>/i", PHP_EOL, $text);
    }
}

if (!function_exists("nlToBr")) {
    /**
     * convert newline code to br tag
     *
     * @param string $text
     * @return string
     */
    function nlToBr(string $text): string
    {
        return replaceNl($text, "<br>");
    }
}

if (!function_exists("escapeHtml")) {
    /**
     * escape html special characters
     *
     * @param string $text
     * @param string $charset
     * @param bool $doubleEncode
     * @return string
     */
    function escapeHtml(string $text, string $charset = "UTF-8", bool $doubleEncode = true): string
    {
        return htmlspecialchars($text, ENT_QUOTES | ENT_SUBSTITUTE, $charset, $doubleEncode);
    }
}
