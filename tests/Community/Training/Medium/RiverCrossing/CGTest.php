<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\RiverCrossing;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\RiverCrossing\RiverCrossing;

/**
 * Tests for the "River crossing" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\RiverCrossing\RiverCrossing
 * @group riverCrossing
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new RiverCrossing();
    }

    /**
     * Test that the code can be executed for "The question is the solution".
     *
     * @group riverCrossing_theQuestionIsTheSolution
     */
    public function testCanExecuteTheQuestionIsTheSolution(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - the question is the solution.txt',
            file_get_contents(__DIR__ . '/output/01 - the question is the solution.txt')
        );
    }

    /**
     * Test that the code can be executed for "The start is the solution".
     *
     * @group riverCrossing_theStartIsTheSolution
     */
    public function testCanExecuteTheStartIsTheSolution(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - the start is the solution.txt',
            "L L L R" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "From one side to the other".
     *
     * @group riverCrossing_fromOneSideToTheOther
     */
    public function testCanExecuteFromOneSideToTheOther(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - from one side to the other.txt',
            file_get_contents(__DIR__ . '/output/03 - from one side to the other.txt')
        );
    }

    /**
     * Test that the code can be executed for "Mix it up".
     *
     * @group riverCrossing_mixItUp
     */
    public function testCanExecuteMixItUp(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - mix it up.txt',
            file_get_contents(__DIR__ . '/output/04 - mix it up.txt')
        );
    }

    /**
     * Test that the code can be executed for "Rescue one".
     *
     * @group riverCrossing_rescueOne
     */
    public function testCanExecuteRescueOne(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - rescue one.txt',
            file_get_contents(__DIR__ . '/output/05 - rescue one.txt')
        );
    }

    /**
     * Test that the code can be executed for "Sorted".
     *
     * @group riverCrossing_sorted
     */
    public function testCanExecuteSorted(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - sorted.txt',
            file_get_contents(__DIR__ . '/output/06 - sorted.txt')
        );
    }
}
