<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\SimplifiedMonopolyTurnsPrediction;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Medium\SimplifiedMonopolyTurnsPrediction\SimplifiedMonopolyTurnsPrediction;

/**
 * Tests for the "Simplified Monopoly™ turns prediction" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\SimplifiedMonopolyTurnsPrediction\SimplifiedMonopolyTurnsPrediction
 * @group simplifiedMonopolyTurnsPrediction
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new SimplifiedMonopolyTurnsPrediction();
    }

    /**
     * Test that the code can be executed for "Start from Go".
     *
     * @group simplifiedMonopolyTurnsPrediction_startFromGo
     */
    public function testCanExecuteVeryEasy(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - start from Go.txt',
            file_get_contents(__DIR__ . '/output/01 - start from Go.txt')
        );
    }

    /**
     * Test that the code can be executed for "Not start from Go".
     *
     * @group simplifiedMonopolyTurnsPrediction_notStartFromGo
     */
    public function testCanExecuteNotStartFromGo(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - not start from Go.txt',
            file_get_contents(__DIR__ . '/output/02 - not start from Go.txt')
        );
    }

    /**
     * Test that the code can be executed for "Around the board".
     *
     * @group simplifiedMonopolyTurnsPrediction_aroundTheBoard
     */
    public function testCanExecuteAroundTheBoard(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - around the board.txt',
            file_get_contents(__DIR__ . '/output/03 - around the board.txt')
        );
    }

    /**
     * Test that the code can be executed for "Lucky doubles".
     *
     * @group simplifiedMonopolyTurnsPrediction_luckyDoubles
     */
    public function testCanExecuteAroundLuckyDoubles(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - lucky doubles.txt',
            file_get_contents(__DIR__ . '/output/04 - lucky doubles.txt')
        );
    }

    /**
     * Test that the code can be executed for "Go to jail".
     *
     * @group simplifiedMonopolyTurnsPrediction_goToJail
     */
    public function testCanExecuteGoToJail(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - go to jail.txt',
            file_get_contents(__DIR__ . '/output/05 - go to jail.txt')
        );
    }

    /**
     * Test that the code can be executed for "Early release".
     *
     * @group simplifiedMonopolyTurnsPrediction_earlyRelease
     */
    public function testCanExecuteEarlyRelease(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - early release.txt',
            file_get_contents(__DIR__ . '/output/06 - early release.txt')
        );
    }

    /**
     * Test that the code can be executed for "Friends forever".
     *
     * @group simplifiedMonopolyTurnsPrediction_friendsForever
     */
    public function testCanExecuteFriendsForever(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - friends forever.txt',
            file_get_contents(__DIR__ . '/output/07 - friends forever.txt')
        );
    }

    /**
     * Test that the code can be executed for "Big run".
     *
     * @group simplifiedMonopolyTurnsPrediction_bigRun
     */
    public function testCanExecuteBigRun(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - big run.txt',
            file_get_contents(__DIR__ . '/output/08 - big run.txt')
        );
    }
}
