<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\UniquePrefixes;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Easy\UniquePrefixes\UniquePrefixes;

/**
 * Tests for the "Unique prefixes" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\UniquePrefixes\UniquePrefixes
 * @group uniquePrefixes
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new UniquePrefixes();
    }

    /**
     * Test that the code can be executed for "1-length prefixes".
     *
     * @group uniquePrefixes_1LengthPrefixes
     */
    public function testCanExecute1LengthPrefixes(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - 1-length prefixes.txt',
            file_get_contents(__DIR__ . '/output/01 - 1-length prefixes.txt')
        );
    }

    /**
     * Test that the code can be executed for "4-length prefixes".
     *
     * @group uniquePrefixes_4LengthPrefixes
     */
    public function testCanExecute4LengthPrefixes(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - 4-length prefixes.txt',
            file_get_contents(__DIR__ . '/output/02 - 4-length prefixes.txt')
        );
    }

    /**
     * Test that the code can be executed for "Weekly challenge".
     *
     * @group uniquePrefixes_weeklyChallenge
     */
    public function testCanExecuteWeeklyChallenge(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - weekly challenge.txt',
            file_get_contents(__DIR__ . '/output/03 - weekly challenge.txt')
        );
    }

    /**
     * Test that the code can be executed for "Ascending prefixes".
     *
     * @group uniquePrefixes_ascendingPrefixes
     */
    public function testCanExecuteAscendingPrefixes(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - ascending prefixes.txt',
            file_get_contents(__DIR__ . '/output/04 - ascending prefixes.txt')
        );
    }

    /**
     * Test that the code can be executed for "Descending prefixes".
     *
     * @group uniquePrefixes_descendingPrefixes
     */
    public function testCanExecuteDescendingPrefixes(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - descending prefixes.txt',
            file_get_contents(__DIR__ . '/output/05 - descending prefixes.txt')
        );
    }

    /**
     * Test that the code can be executed for "Pierre, Paul, Jacques & co.".
     *
     * @group uniquePrefixes_PierrePaulJacquesCo
     */
    public function testCanExecutePierrePaulJacquesCo(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - Pierre, Paul, Jacques & co.txt',
            file_get_contents(__DIR__ . '/output/06 - Pierre, Paul, Jacques & co.txt')
        );
    }
}
