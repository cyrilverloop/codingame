<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Training\Medium\BlunderEpisode1;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Training\Medium\BlunderEpisode1\BlunderEpisode1;

/**
 * Tests for the "Blunder - episode 1" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Training\Medium\BlunderEpisode1\BlunderEpisode1
 * @group blunderEpisode1
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new BlunderEpisode1();
    }

    /**
     * Test that the code can be executed for "Simple moves".
     *
     * @group blunderEpisode1_simpleMoves
     */
    public function testCanExecuteSimpleMoves(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - simple moves.txt',
            file_get_contents(__DIR__ . '/output/01 - simple moves.txt')
        );
    }

    /**
     * Test that the code can be executed for "Obstacles".
     *
     * @group blunderEpisode1_obstacles
     */
    public function testCanExecuteObstacles(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - obstacles.txt',
            file_get_contents(__DIR__ . '/output/02 - obstacles.txt')
        );
    }

    /**
     * Test that the code can be executed for "Priorities".
     *
     * @group blunderEpisode1_priorities
     */
    public function testCanExecutePriorities(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - priorities.txt',
            file_get_contents(__DIR__ . '/output/03 - priorities.txt')
        );
    }

    /**
     * Test that the code can be executed for "Straight line".
     *
     * @group blunderEpisode1_straightLine
     */
    public function testCanExecuteStraightLine(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - straight line.txt',
            file_get_contents(__DIR__ . '/output/04 - straight line.txt')
        );
    }

    /**
     * Test that the code can be executed for "Path modifier".
     *
     * @group blunderEpisode1_pathModifier
     */
    public function testCanExecutePathModifier(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - path modifier.txt',
            file_get_contents(__DIR__ . '/output/05 - path modifier.txt')
        );
    }

    /**
     * Test that the code can be executed for "Breaker mode".
     *
     * @group blunderEpisode1_breakerMode
     */
    public function testCanExecuteBreakerMode(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - breaker mode.txt',
            file_get_contents(__DIR__ . '/output/06 - breaker mode.txt')
        );
    }

    /**
     * Test that the code can be executed for "Inverter".
     *
     * @group blunderEpisode1_inverter
     */
    public function testCanExecuteInverter(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - inverter.txt',
            file_get_contents(__DIR__ . '/output/07 - inverter.txt')
        );
    }

    /**
     * Test that the code can be executed for "Teleport".
     *
     * @group blunderEpisode1_teleport
     */
    public function testCanExecuteTeleport(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - teleport.txt',
            file_get_contents(__DIR__ . '/output/08 - teleport.txt')
        );
    }

    /**
     * Test that the code can be executed for "Broken wall?".
     *
     * @group blunderEpisode1_brokenWall
     */
    public function testCanExecuteBrokenWall(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/09 - broken wall.txt',
            file_get_contents(__DIR__ . '/output/09 - broken wall.txt')
        );
    }

    /**
     * Test that the code can be executed for "All together".
     *
     * @group blunderEpisode1_allTogether
     */
    public function testCanExecuteAllTogether(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/10 - all together.txt',
            file_get_contents(__DIR__ . '/output/10 - all together.txt')
        );
    }

    /**
     * Test that the code can be executed for "LOOP".
     *
     * @group blunderEpisode1_LOOP
     */
    public function testCanExecuteLOOP(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/11 - LOOP.txt',
            file_get_contents(__DIR__ . '/output/11 - LOOP.txt')
        );
    }

    /**
     * Test that the code can be executed for "Multiple loops".
     *
     * @group blunderEpisode1_multipleLoops
     */
    public function testCanExecuteMultipleLoops(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/12 - multiple loops.txt',
            file_get_contents(__DIR__ . '/output/12 - multiple loops.txt')
        );
    }
}
