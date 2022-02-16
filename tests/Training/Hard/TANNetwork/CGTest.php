<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Training\Hard\TANNetwork;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Training\Hard\TANNetwork\TANNetwork;

/**
 * Tests for the "TAN network" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Training\Hard\TANNetwork\TANNetwork
 * @group TANNetwork
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new TANNetwork();
    }

    /**
     * Test that the code can be executed for "Example".
     *
     * @group TANNetwork_example
     */
    public function testCanExecuteExample(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - example.txt',
            file_get_contents(__DIR__ . '/output/01 - example.txt')
        );
    }

    /**
     * Test that the code can be executed for "One single stop".
     *
     * @group TANNetwork_oneSingleStop
     */
    public function testCanExecuteOneSingleStop(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - one single stop.txt',
            file_get_contents(__DIR__ . '/output/02 - one single stop.txt')
        );
    }

    /**
     * Test that the code can be executed for "Same starting and end points".
     *
     * @group TANNetwork_startingAndEndPoints
     */
    public function testCanExecuteSameStartingAndEndPoints(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - same starting and end points.txt',
            'Bonne Garde' . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Several stages".
     *
     * @group TANNetwork_severalStages
     */
    public function testCanExecuteSeveralStages(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - several stages.txt',
            file_get_contents(__DIR__ . '/output/04 - several stages.txt')
        );
    }

    /**
     * Test that the code can be executed for "Large number of stages".
     *
     * @group TANNetwork_largeNumberOfStages
     */
    public function testCanExecuteLargeNumberOfStages(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - large number of stages.txt',
            file_get_contents(__DIR__ . '/output/05 - large number of stages.txt')
        );
    }

    /**
     * Test that the code can be executed for "Route impossible".
     *
     * @group TANNetwork_RouteImpossible
     */
    public function testCanExecuteRouteImpossible(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - route impossible.txt',
            'IMPOSSIBLE' . PHP_EOL
        );
    }
}
