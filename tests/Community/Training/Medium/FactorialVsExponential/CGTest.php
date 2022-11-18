<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\FactorialVsExponential;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Medium\FactorialVsExponential\FactorialVsExponential;

/**
 * Tests for the "Factorial vs exponential" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\FactorialVsExponential\FactorialVsExponential
 * @group factorialVsExponential
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new FactorialVsExponential();
    }

    /**
     * Test that the code can be executed for "Few small integer values".
     *
     * @group factorialVsExponential_fewSmallIntegerValues
     */
    public function testCanExecuteFewSmallIntegerValues(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - few small integer values.txt',
            "4 7" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Few small float values".
     *
     * @group factorialVsExponential_fewSmallFloatValues
     */
    public function testCanExecuteFewSmallFloatValues(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - few small float values.txt',
            "3 14 25" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "More float values".
     *
     * @group factorialVsExponential_moreFloatValues
     */
    public function testCanExecuteMoreFloatValues(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - more float values.txt',
            "95 154 249 38 130 28 14 206 252 214" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Bigger float values".
     *
     * @group factorialVsExponential_biggerFloatValues
     */
    public function testCanExecuteBiggerFloatValues(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - bigger float values.txt',
            file_get_contents(__DIR__ . '/output/04 - bigger float values.txt')
        );
    }

    /**
     * Test that the code can be executed for "Huge float values".
     *
     * @group factorialVsExponential_hugeFloatValues
     */
    public function testCanExecuteHugeFloatValues(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - huge float values.txt',
            file_get_contents(__DIR__ . '/output/05 - huge float values.txt')
        );
    }
}
