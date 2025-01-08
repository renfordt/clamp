<?php

declare(strict_types=1);

namespace tests;

use PHPUnit\Framework\Attributes\CoversFunction;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

#[CoversFunction('clamp')]
#[CoversFunction('clampMinMax')]
final class ClampTest extends TestCase
{
    public static function dataProviderForClampTest(): array
    {
        return [
            [6, 0, 5, 5], // exceed
            [4, 1, 10, 4], // in range
            [-2, 3, 7, 3], // undercut
            [0.25, 0.0, 0.1, 0.1], // exceed
            [1.45, 1.0, 2.0, 1.45], // in range
            [-0.14, -0.1, 0.1, -0.1], // undercut
            ['d', 'a', 'c', 'c'], // exceed
            ['g', 'a', 'z', 'g'], // in range
            ['a', 'c', 'f', 'c'], // undercut

        ];
    }

    #[DataProvider('dataProviderForClampTest')]
    public function test_clamp(int|float|string $value, int|float|string $min, int|float|string $max, int|float|string $expected): void
    {
        $this->assertSame($expected, clamp($value, $min, $max));
    }

    #[DataProvider('dataProviderForClampTest')]
    public function test_clamp_min_max(int|float|string $value, int|float|string $min, int|float|string $max, int|float|string $expected): void
    {
        $this->assertSame($expected, clampMinMax($value, $min, $max));
    }

    public function test_if_function_exists(): void
    {
        $this->assertTrue(function_exists('clamp'), 'Function clamp does not exist');
        $this->assertTrue(function_exists('clampMinMax'), 'Function clampMinMax does not exist');
    }
}
