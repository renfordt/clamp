<?php

if (!function_exists('clamp')) {
    /**
     * Clamps a given number between a minimum and maximum value.
     *
     * @param  int|float|string  $value  The number to be clamped.
     * @param  int|float|string  $min  The minimum value to clamp to.
     * @param  int|float|string  $max  The maximum value to clamp to.
     *
     * @return int|float|string The clamped number.
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
