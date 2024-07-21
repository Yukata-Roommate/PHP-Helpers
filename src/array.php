<?php

if (!function_exists("arrayShuffle")) {
    /**
     * shuffle array
     * if $isMaintainKey is true, maintain key
     *
     * @param array $array
     * @param bool $isMaintainKey
     * @return array
     */
    function arrayShuffle(array $array, bool $isMaintainKey = true): array
    {
        $keys = array_keys($array);

        shuffle($keys);

        $tmp = [];
        foreach ($keys as $key) {
            if ($isMaintainKey) {
                $tmp[$key] = $array[$key];
            } else {
                $tmp[] = $array[$key];
            }
        }

        return $tmp;
    }
}

if (!function_exists("arrayMergeUnique")) {
    /**
     * array_merge + array_unique
     *
     * @param array $source
     * @param array $target
     * @return array
     */
    function arrayMergeUnique(array $source, array $target): array
    {
        $array = array_merge($source, $target);

        $array = array_unique($array);

        $array = array_values($array);

        return $array;
    }
}

if (!function_exists("arrayRemoveEmpty")) {
    /**
     * remove empty value from array
     *
     * @param array $array
     * @return array
     */
    function arrayRemoveEmpty(array $array): array
    {
        $tmp = [];

        foreach ($array as $item) {
            if (empty($item)) continue;

            if (is_array($item)) {
                $value = arrayRemoveEmpty($item);

                if (!empty($value)) $tmp[] = $value;

                continue;
            }

            $tmp[] = $item;
        }

        return $tmp;
    }
}

if (!function_exists("arraySearchKey")) {
    /**
     * search key from multi-dimensional array
     *
     * @param array<array> $haystack
     * @param string|int $column
     * @param mixed $needle
     * @return string|int|null
     */
    function arraySearchKey(array $haystack, string|int $column, mixed $needle): string|int|null
    {
        $values = array_column($haystack, $column);

        $key = array_search($needle, $values);

        return $key;
    }
}

if (!function_exists("arraySearchValue")) {
    /**
     * search value from multi-dimensional array
     *
     * @param array<array> $haystack
     * @param string|int $column
     * @param mixed $needle
     * @return mixed
     */
    function arraySearchValue(array $haystack, string|int $column, mixed $needle): mixed
    {
        $key = arraySearchKey($haystack, $column, $needle);

        return isset($haystack[$key]) ? $haystack[$key] : null;
    }
}
