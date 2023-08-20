<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\RoadTrip;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\RoadTrip\RoadTrip;

/**
 * Tests for the "Road trip" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\RoadTrip\RoadTrip
 * @group roadTrip
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new RoadTrip();
    }

    /**
     * Test that the code can be executed for "Few real friends".
     *
     * @group roadTrip_fewRealFriends
     */
    public function testCanExecuteFewRealFriends(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - few real friends.txt',
            7 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Only fake friends".
     *
     * @group roadTrip_onlyFakeFriends
     */
    public function testCanExecuteOnlyFakeFriends(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - only fake friends.txt',
            0 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Useless fake friends".
     *
     * @group roadTrip_uselessFakeFriends
     */
    public function testCanExecuteUselessFakeFriends(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - useless fake friends.txt',
            156 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Necessary fake friends".
     *
     * @group roadTrip_necessaryFakeFriends
     */
    public function testCanExecuteNecessaryFakeFriends(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - necessary fake friends.txt',
            46 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Forever alone".
     *
     * @group roadTrip_foreverAlone
     */
    public function testCanExecuteForeverAlone(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - forever alone.txt',
            0 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "No base cost".
     *
     * @group roadTrip_noBaseCost
     */
    public function testCanExecuteNoBaseCost(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - no base cost.txt',
            97 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Only base cost".
     *
     * @group roadTrip_onlyBaseCost
     */
    public function testCanExecuteOnlyBaseCost(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - only base cost.txt',
            70 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Free trip!".
     *
     * @group roadTrip_freeTrip
     */
    public function testCanExecuteFreeTrip(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - free trip!.txt',
            66 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Many real friends".
     *
     * @group roadTrip_manyRealFriends
     */
    public function testCanExecuteManyRealFriends(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/09 - many real friends.txt',
            21515517 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Many friends".
     *
     * @group roadTrip_manyFriends
     */
    public function testCanExecuteManyFriends(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/10 - many friends.txt',
            12211143 . PHP_EOL
        );
    }
}
