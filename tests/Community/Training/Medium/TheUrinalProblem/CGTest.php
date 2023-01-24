<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\TheUrinalProblem;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Medium\TheUrinalProblem\TheUrinalProblem;

/**
 * Tests for the "The urinal problem" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\TheUrinalProblem\TheUrinalProblem
 * @group theUrinalProblem
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new TheUrinalProblem();
    }

    /**
     * Test that the code can be executed for "Small bathroom".
     *
     * @group theUrinalProblem_smallBathroom
     */
    public function testCanExecuteSmallBathroom(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - small bathroom.txt',
            0 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "School bathroom".
     *
     * @group theUrinalProblem_schoolBathroom
     */
    public function testCanExecuteSchoolBathroom(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - school bathroom.txt',
            2 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Sporting event".
     *
     * @group theUrinalProblem_sportingEvent
     */
    public function testCanExecuteSportingEvent(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - sporting event.txt',
            23 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Mostly empty".
     *
     * @group theUrinalProblem_mostlyEmpty
     */
    public function testCanExecuteMostlyEmpty(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - mostly empty.txt',
            19 . PHP_EOL
        );
    }
}
