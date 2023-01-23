<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\FindTheReplacement;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Medium\FindTheReplacement\FindTheReplacement;

/**
 * Tests for the "Find the replacement" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\FindTheReplacement\FindTheReplacement
 * @group findTheReplacement
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new FindTheReplacement();
    }

    /**
     * Test that the code can be executed for "Easy replacement".
     *
     * @group findTheReplacement_easyReplacement
     */
    public function testCanExecuteEasyReplacement(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - easy replacement.txt',
            file_get_contents(__DIR__ . '/output/01 - easy replacement.txt')
        );
    }

    /**
     * Test that the code can be executed for "No replacement".
     *
     * @group findTheReplacement_noReplacement
     */
    public function testCanExecuteNoReplacement(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - no replacement.txt',
            "NONE" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "CAN'T (hard)".
     *
     * @group findTheReplacement_CANTHard
     */
    public function testCanExecuteCANTHard(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - CAN\'T (hard).txt',
            "CAN'T" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Symbols".
     *
     * @group findTheReplacement_symbols
     */
    public function testCanExecuteSymbols(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - symbols.txt',
            file_get_contents(__DIR__ . '/output/04 - symbols.txt')
        );
    }

    /**
     * Test that the code can be executed for "Random, all different".
     *
     * @group findTheReplacement_randomAllDifferent
     */
    public function testCanExecuteRandomAllDifferent(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - random, all different.txt',
            file_get_contents(__DIR__ . '/output/05 - random, all different.txt')
        );
    }

    /**
     * Test that the code can be executed for "Symbols reversed".
     *
     * @group findTheReplacement_symbolsReversed
     */
    public function testCanExecuteSymbolsReversed(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - symbols reversed.txt',
            "CAN'T" . PHP_EOL
        );
    }
}
