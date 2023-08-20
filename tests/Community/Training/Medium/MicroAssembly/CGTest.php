<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\MicroAssembly;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\MicroAssembly\MicroAssembly;

/**
 * Tests for the "Micro assembly" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\MicroAssembly\MicroAssembly
 * @group microAssembly
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new MicroAssembly();
    }

    /**
     * Test that the code can be executed for "MOV test".
     *
     * @group microAssembly_MOVTest
     */
    public function testCanExecuteMOVTest(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - MOV test.txt',
            "1 3 1 -4" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "ADD test".
     *
     * @group microAssembly_ADDTest
     */
    public function testCanExecuteADDTest(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - ADD test.txt',
            "4 9 13 5" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "SUB test".
     *
     * @group microAssembly_SUBTest
     */
    public function testCanExecuteSUBTest(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - SUB test.txt',
            "0 12 21 12" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "JNE test".
     *
     * @group microAssembly_JNETest
     */
    public function testCanExecuteJNETest(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - JNE test.txt',
            "3 0 7 9" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Handling negative values".
     *
     * @group microAssembly_handlingNegativeValues
     */
    public function testCanExecuteHandlingNegativeValues(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - handling negative values.txt',
            "-1 0 -3 -10" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Calculating sum of 1..N".
     *
     * @group microAssembly_calculatingSumOf1N
     */
    public function testCanExecuteCalculatingSumOf1N(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - calculating sum of 1_N.txt',
            "55 0 0 0" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Nested loops".
     *
     * @group microAssembly_nestedLoops
     */
    public function testCanExecuteNestedLoops(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - nested loops.txt',
            "30 0 0 -7" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Multiplication and jump over instruction".
     *
     * @group microAssembly_multiplicationAndJumpOverInstruction
     */
    public function testCanExecuteMultiplicationAndJumpOverInstruction(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - multiplication and jump over instruction.txt',
            "105 0 0 0" . PHP_EOL
        );
    }
}
