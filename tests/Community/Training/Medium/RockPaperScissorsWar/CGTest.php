<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\RockPaperScissorsWar;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\RockPaperScissorsWar\RockPaperScissorsWar;

/**
 * Tests for the "Rock-paper-scissors war" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\RockPaperScissorsWar\RockPaperScissorsWar
 * @group rockPaperScissorsWar
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new RockPaperScissorsWar();
    }

    /**
     * Test that the code can be executed for "Example".
     *
     * @group rockPaperScissorsWar_example
     */
    public function testCanExecuteExample(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - example.txt',
            file_get_contents(__DIR__ . '/output/01 - example.txt')
        );
    }

    /**
     * Test that the code can be executed for "Win and lose".
     *
     * @group rockPaperScissorsWar_winAndLose
     */
    public function testCanExecuteWinAndLose(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - win and lose.txt',
            file_get_contents(__DIR__ . '/output/02 - win and lose.txt')
        );
    }

    /**
     * Test that the code can be executed for "Propagation".
     *
     * @group rockPaperScissorsWar_propagation
     */
    public function testCanExecutePropagation(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - propagation.txt',
            file_get_contents(__DIR__ . '/output/03 - propagation.txt')
        );
    }

    /**
     * Test that the code can be executed for "One fights a hundred".
     *
     * @group rockPaperScissorsWar_oneFightsAHundred
     */
    public function testCanExecuteOneFightsAHundred(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - one fights a hundred.txt',
            file_get_contents(__DIR__ . '/output/04 - one fights a hundred.txt')
        );
    }

    /**
     * Test that the code can be executed for "Linear 1".
     *
     * @group rockPaperScissorsWar_linear1
     */
    public function testCanExecuteLinear1(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - linear 1.txt',
            file_get_contents(__DIR__ . '/output/05 - linear 1.txt')
        );
    }

    /**
     * Test that the code can be executed for "Linear 2".
     *
     * @group rockPaperScissorsWar_linear2
     */
    public function testCanExecuteLinear2(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - linear 2.txt',
            file_get_contents(__DIR__ . '/output/06 - linear 2.txt')
        );
    }

    /**
     * Test that the code can be executed for "Random".
     *
     * @group rockPaperScissorsWar_random
     */
    public function testCanExecuteRandom(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - random.txt',
            file_get_contents(__DIR__ . '/output/07 - random.txt')
        );
    }

    /**
     * Test that the code can be executed for "Diamonds".
     *
     * @group rockPaperScissorsWar_diamonds
     */
    public function testCanExecuteDiamonds(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - diamonds.txt',
            file_get_contents(__DIR__ . '/output/08 - diamonds.txt')
        );
    }

    /**
     * Test that the code can be executed for "United kingdom".
     *
     * @group rockPaperScissorsWar_unitedKingdom
     */
    public function testCanExecuteUnitedKingdom(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/09 - united kingdom.txt',
            file_get_contents(__DIR__ . '/output/09 - united kingdom.txt')
        );
    }

    /**
     * Test that the code can be executed for "United states".
     *
     * @group rockPaperScissorsWar_unitedStates
     */
    public function testCanExecuteUnitedStates(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/10 - united states.txt',
            file_get_contents(__DIR__ . '/output/10 - united states.txt')
        );
    }
}
