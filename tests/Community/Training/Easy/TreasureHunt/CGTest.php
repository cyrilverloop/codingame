<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\TreasureHunt;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Easy\TreasureHunt\TreasureHunt;

/**
 * Tests for the "Treasure hunt" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\TreasureHunt\TreasureHunt
 * @group treasureHunt
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new TreasureHunt();
    }

    /**
     * Test that the code can be executed for "Small map".
     *
     * @group treasureHunt_smallMap
     */
    public function testCanExecuteSmallMap(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - small map.txt',
            10 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Bigger map".
     *
     * @group treasureHunt_biggerMap
     */
    public function testCanExecuteBiggerMap(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - bigger map.txt',
            18 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "I want to cry".
     *
     * @group treasureHunt_iWantToCry
     */
    public function testCanExecuteIWantToCry(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - i want to cry.txt',
            0 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Easy life".
     *
     * @group treasureHunt_easyLife
     */
    public function testCanExecuteEasyLife(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - easy life.txt',
            135 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Am I going in circles ?".
     *
     * @group treasureHunt_amIGoingInCircles
     */
    public function testCanExecuteAmIGoingInCircles(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - am I going in circles ?.txt',
            36 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "That's a maze !".
     *
     * @group treasureHunt_thatsAMaze
     */
    public function testCanExecuteThatsAMaze(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - thats a maze !.txt',
            39 . PHP_EOL
        );
    }
}
