<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Training\Hard\BlunderEpisode2;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Training\Hard\BlunderEpisode2\BlunderEpisode2;

/**
 * Tests for the "Blunder - episode 2" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Training\Hard\BlunderEpisode2\BlunderEpisode2
 * @group blunderEpisode2
 */
final class BlunderEpisode2Test extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new BlunderEpisode2();
    }

    /**
     * Test that the code can be executed for "One room".
     *
     * @group blunderEpisode2_oneRoom
     */
    public function testCanExecuteOneRoom(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - one room.txt',
            200 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "3 rooms".
     *
     * @group blunderEpisode2_3Rooms
     */
    public function testCanExecute3Rooms(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - 3 rooms.txt',
            40 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "15 rooms, small range".
     *
     * @group blunderEpisode2_15RoomsSmallRange
     */
    public function testCanExecute15RoomsSmallRange(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - 15 rooms small range.txt',
            88 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "55 rooms".
     *
     * @group blunderEpisode2_55Rooms
     */
    public function testCanExecute55Rooms(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - 55 rooms.txt',
            358 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "1275 rooms".
     *
     * @group blunderEpisode2_1275Rooms
     */
    public function testCanExecute1275Rooms(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - 1275 rooms.txt',
            1928 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "5050 rooms".
     *
     * @group blunderEpisode2_5050Rooms
     */
    public function testCanExecute5050Rooms(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - 5050 rooms.txt',
            75413 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "9870 rooms".
     *
     * @group blunderEpisode2_9870Rooms
     */
    public function testCanExecute9870Rooms(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - 9870 rooms.txt',
            103558 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Square building".
     *
     * @group blunderEpisode2_squareBuilding
     */
    public function testCanExecuteSquareBuilding(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - square building.txt',
            400 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Multiple entries".
     *
     * @group blunderEpisode2_multipleEntries
     */
    public function testCanExecuteMultipleEntries(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/09 - multiple entries.txt',
            358 . PHP_EOL
        );
    }
}
