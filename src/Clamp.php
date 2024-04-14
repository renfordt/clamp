<?php

if (!function_exists('clamp')) {
    /**
     * Clamps a value between a minimum and maximum range.
     *
     * @param  int|float|string  $value  The value to be clamped.
     * @param  int|float|string  $min  The minimum value of the range.
     * @param  int|float|string  $max  The maximum value of the range.
     *
     * @return int|float|string The clamped value.
     */
    function clamp(int|float|string $value, int|float|string $min, int|float|string $max): int|float|string
    {
        if ($value > $max) {
            return $max;
        }
        if ($value < $min) {
            return $min;
        }
        return $value;
    }
}
