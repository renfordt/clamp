<?php

namespace test;

use PHPUnit\Framework\TestCase;

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

    /**
     * @dataProvider dataProviderForClampTest
     */
    public function testClamp($value, $min, $max, $expected): void
    {
        $this->assertSame($expected, clamp($value, $min, $max));
    }

    /**
     * @dataProvider dataProviderForClampTest
     */
    public function testClampMinMax($value, $min, $max, $expected): void
    {
        $this->assertSame($expected, clampMinMax($value, $min, $max));
    }

    public function testIfFunctionExists() {
        $this->assertTrue(function_exists('clamp'), 'Function clamp does not exist');
    }
}
