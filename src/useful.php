<?php

if (!function_exists("varDump")) {
    /**
     * easy to output var_dump
     *
     * @param mixed $any
     * @return void
     */
    function varDump(mixed $any): void
    {
        echo "<pre>";
        var_dump($any);
        echo "</pre>";
    }
}

if (!function_exists("jsonEncode")) {
    /**
     * easy to json_encode
     *
     * @param mixed $any
     * @return string|false
     */
    function jsonEncode(mixed $any): string|false
    {
        return json_encode($any, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    }
}

if (!function_exists("className")) {
    /**
     * get class name from class path
     *
     * @param object|string $classPath
     */
    function className(object|string $classPath): string
    {
        if (is_object($classPath)) $classPath = get_class($classPath);

        $array = explode("\\", $classPath);

        return end($array);
    }
}
