<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\LengthOfSyracuseConjectureSequence;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Medium\LengthOfSyracuseConjectureSequence\LengthOfSyracuseConjectureSequence;

/**
 * Tests for the "Length of syracuse conjecture sequence" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\LengthOfSyracuseConjectureSequence\LengthOfSyracuseConjectureSequence
 * @group lengthOfSyracuseConjectureSequence
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new LengthOfSyracuseConjectureSequence();
    }

    /**
     * Test that the code can be executed for "Only one range".
     *
     * @group lengthOfSyracuseConjectureSequence_onlyOneRange
     */
    public function testCanExecuteOnlyOneRange(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - only one range.txt',
            "9 20" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Two ranges".
     *
     * @group lengthOfSyracuseConjectureSequence_twoRanges
     */
    public function testCanExecuteTwoRanges(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - two ranges.txt',
            file_get_contents(__DIR__ . '/output/02 - two ranges.txt')
        );
    }

    /**
     * Test that the code can be executed for "Large range".
     *
     * @group lengthOfSyracuseConjectureSequence_largeRange
     */
    public function testCanExecuteLargeRange(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - large range.txt',
            "77031 351" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Large ranges".
     *
     * @group lengthOfSyracuseConjectureSequence_largeRanges
     */
    public function testCanExecuteLargeRanges(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - large ranges.txt',
            file_get_contents(__DIR__ . '/output/04 - large ranges.txt')
        );
    }
}
