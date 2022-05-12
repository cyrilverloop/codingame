<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\ExtendedHammingCodes;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Easy\ExtendedHammingCodes\ExtendedHammingCodes;

/**
 * Tests for the "Extended hamming codes" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\ExtendedHammingCodes\ExtendedHammingCodes
 * @group extendedHammingCodes
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new ExtendedHammingCodes();
    }

    /**
     * Test that the code can be executed for "Single bit flipped".
     *
     * @group extendedHammingCodes_singleBitFlipped
     */
    public function testCanExecuteSingleBitFlipped(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - single bit flipped.txt',
            "1100101011110110" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Parity bit flipped".
     *
     * @group extendedHammingCodes_parityBitFlipped
     */
    public function testCanExecuteParityBitFlipped(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - parity bit flipped.txt',
            "0001011100101011" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Two errors".
     *
     * @group extendedHammingCodes_twoErrors
     */
    public function testCanExecuteTwoErrors(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - two errors.txt',
            "TWO ERRORS" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "No error".
     *
     * @group extendedHammingCodes_noError
     */
    public function testCanExecuteNoError(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - no error.txt',
            "1001101000000011" . PHP_EOL
        );
    }
}
