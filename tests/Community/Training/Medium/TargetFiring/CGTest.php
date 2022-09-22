<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\TargetFiring;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Medium\TargetFiring\TargetFiring;

/**
 * Tests for the "Target firing" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\TargetFiring\TargetFiring
 * @group targetFiring
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new TargetFiring();
    }

    /**
     * Test that the code can be executed for "Strongest first".
     *
     * @group targetFiring_strongestFirst
     */
    public function testCanExecuteStrongestFirst(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - strongest first.txt',
            3200 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Tankiest last".
     *
     * @group targetFiring_tankiestLast
     */
    public function testCanExecuteTankiestLast(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - tankiest last.txt',
            1700 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Strongest AND Tankiest?".
     *
     * @group targetFiring_strongestANDTankiest
     */
    public function testCanExecuteStrongestANDTankiest(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - strongest and tankiest?.txt',
            2880 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Boss and mooks".
     *
     * @group targetFiring_bossAndMooks
     */
    public function testCanExecuteBossAndMooks(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - boss and mooks.txt',
            3430 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "The swarm".
     *
     * @group targetFiring_theSwarm
     */
    public function testCanExecuteTheSwarm(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - the swarm.txt',
            212 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Not the shiny paint!".
     *
     * @group targetFiring_notTheShinyPaint
     */
    public function testCanExecuteNotTheShinyPaint(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - not the shiny paint!.txt',
            "FLEE" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Close call".
     *
     * @group targetFiring_closeCall
     */
    public function testCanExecuteCloseCall(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - close call.txt',
            0 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Tickle wars".
     *
     * @group targetFiring_tickleWars
     */
    public function testCanExecuteTickleWars(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - tickle wars.txt',
            4950 . PHP_EOL
        );
    }
}
