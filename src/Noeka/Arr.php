<?php

namespace Noeka\Support;

class Arr {
    /**
     * Access array keys using dot notation.
     *
     * @param array $array
     * @param string $key
     * @param mixed $default
     */
    public static function get(array $array, string $key, mixed $default = null): mixed
    {
        if (false === strpos($key, '.')) {
            return isset($array[$key])
                ? $array[$key]
                : $default;
        }

        $segments = explode('.', $key);
        $firstSegment = array_shift($segments);
        
        if (! isset($array[$firstSegment]) || ! is_array($array[$firstSegment])) {
            return $default;
        }

        return static::get($array[$firstSegment], implode('.', $segments), $default);
    }
}
