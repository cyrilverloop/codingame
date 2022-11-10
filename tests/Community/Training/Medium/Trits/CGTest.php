<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\Trits;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Medium\Trits\Trits;

/**
 * Tests for the "Trits (balanced ternary computing)" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\Trits\Trits
 * @group trits
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new Trits();
    }

    /**
     * Test that the code can be executed for "Addition".
     *
     * @group trits_addition
     */
    public function testCanExecuteAddition(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - addition.txt',
            "11T" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Subtraction".
     *
     * @group trits_subtraction
     */
    public function testCanExecuteSubtraction(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - subtraction.txt',
            "1T01" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Multiplication".
     *
     * @group trits_multiplication
     */
    public function testCanExecuteMultiplication(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - multiplication.txt',
            "110" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Shift up".
     *
     * @group trits_shiftUp
     */
    public function testCanExecuteShiftUp(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - shift up.txt',
            "1T00" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Shift down".
     *
     * @group trits_shiftDown
     */
    public function testCanExecuteShiftDown(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - shift down.txt',
            "1T" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Larger addition".
     *
     * @group trits_largerAddition
     */
    public function testCanExecuteLargerAddition(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - larger addition.txt',
            "11111111" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Too much shift down".
     *
     * @group trits_tooMuchShiftDown
     */
    public function testCanExecuteTooMuchShiftDown(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - too much shift down.txt',
            "0" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Larger subtraction".
     *
     * @group trits_largerSubtraction
     */
    public function testCanExecuteLargerSubtraction(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - larger subtraction.txt',
            "1T001110" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Larger shift up".
     *
     * @group trits_largerShiftUp
     */
    public function testCanExecuteLargerShiftUp(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/09 - larger shift up.txt',
            "1T00000" . PHP_EOL
        );
    }
}
