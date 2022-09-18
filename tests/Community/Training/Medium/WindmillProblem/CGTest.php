<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\WindmillProblem;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Medium\WindmillProblem\WindmillProblem;

/**
 * Tests for the "Windmill problem" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\WindmillProblem\WindmillProblem
 * @group windmillProblem
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new WindmillProblem();
    }

    /**
     * Test that the code can be executed for "Example".
     *
     * @group windmillProblem_example
     */
    public function testCanExecuteExample(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - example.txt',
            file_get_contents(__DIR__ . '/output/01 - example.txt')
        );
    }

    /**
     * Test that the code can be executed for "Parallelogram".
     *
     * @group windmillProblem_parallelogram
     */
    public function testCanExecuteParallelogram(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - parallelogram.txt',
            file_get_contents(__DIR__ . '/output/02 - parallelogram.txt')
        );
    }

    /**
     * Test that the code can be executed for "10 random points".
     *
     * @group windmillProblem_10RandomPoints
     */
    public function testCanExecute10RandomPoints(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - 10 random points.txt',
            file_get_contents(__DIR__ . '/output/03 - 10 random points.txt')
        );
    }

    /**
     * Test that the code can be executed for "Large".
     *
     * @group windmillProblem_large
     */
    public function testCanExecuteLarge(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - large.txt',
            file_get_contents(__DIR__ . '/output/04 - large.txt')
        );
    }

    /**
     * Test that the code can be executed for "Infinite loop".
     *
     * @group windmillProblem_infiniteLoop
     */
    public function testCanExecuteInfiniteLoop(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - infinite loop.txt',
            file_get_contents(__DIR__ . '/output/05 - infinite loop.txt')
        );
    }

    /**
     * Test that the code can be executed for "Smarter approach required".
     *
     * @group windmillProblem_smarterApproachRequired
     */
    public function testCanExecuteSmarterApproachRequired(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - smarter approach required.txt',
            file_get_contents(__DIR__ . '/output/06 - smarter approach required.txt')
        );
    }

    /**
     * Test that the code can be executed for "Convex hull".
     *
     * @group windmillProblem_convexHull
     */
    public function testCanExecuteConvexHull(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - convex hull.txt',
            file_get_contents(__DIR__ . '/output/07 - convex hull.txt')
        );
    }
}
