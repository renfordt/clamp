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
        } elseif ($value < $min) {
            return $min;
        }
        return $value;
    }
}

if (!function_exists('clampMinMax')) {
    /**
     * Clamps a value between a minimum and maximum range. This function uses the max($min, min($max, $value)) approach.
     *
     * @param  int|float|string  $value  The value to be clamped.
     * @param  int|float|string  $min  The minimum value of the range.
     * @param  int|float|string  $max  The maximum value of the range.
     *
     * @return int|float|string The clamped value.
     */
    function clampMinMax(int|float|string $value, int|float|string $min, int|float|string $max): int|float|string
    {
        return max($min, min($max, $value));
    }
}
