<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\Battleship;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\Battleship\Battleship;

/**
 * Tests for the "Battleship" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\Battleship\Battleship
 * @group battleship
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new Battleship();
    }

    /**
     * Test that the code can be executed for "Ships too close".
     *
     * @group battleship_shipsTooClose
     */
    public function testCanExecuteShipsTooClose(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - ships too close.txt',
            "INVALID" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Wrong number of ships".
     *
     * @group battleship_wrongNumberOfShips
     */
    public function testCanExecuteWrongNumberOfShips(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - wrong number of ships.txt',
            "INVALID" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Wrong size of ships".
     *
     * @group battleship_wrongSizeOfShips
     */
    public function testCanExecuteWrongSizeOfShips(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - wrong size of ships.txt',
            "INVALID" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Missed!".
     *
     * @group battleship_missed
     */
    public function testCanExecuteMissed(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - missed!.txt',
            "MISSED" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Touché!".
     *
     * @group battleship_touche
     */
    public function testCanExecuteTouche(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - touché!.txt',
            "TOUCHE" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Touché coulé!".
     *
     * @group battleship_toucheCoule
     */
    public function testCanExecuteToucheCoule(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - touché coulé!.txt',
            "TOUCHE COULE 4" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Game lost".
     *
     * @group battleship_gameLost
     */
    public function testCanExecuteGameLost(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - game lost.txt',
            "TOUCHE COULE 2 THEN LOSE" . PHP_EOL
        );
    }
}
