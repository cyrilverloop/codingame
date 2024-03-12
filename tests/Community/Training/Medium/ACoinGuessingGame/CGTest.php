<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\ACoinGuessingGame;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\ACoinGuessingGame\ACoinGuessingGame;

/**
 * Tests for the "A coin guessing game" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\ACoinGuessingGame\ACoinGuessingGame
 * @group aCoinGuessingGame
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new ACoinGuessingGame();
    }

    /**
     * Test that the code can be executed for "2 coins".
     *
     * @group aCoinGuessingGame_2Coins
     */
    public function testCanExecute2Coins(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - 2 coins.txt',
            "4 2" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "3 coins".
     *
     * @group aCoinGuessingGame_3Coins
     */
    public function testCanExecute3Coins(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - 3 coins.txt',
            "2 4 6" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "4 coins".
     *
     * @group aCoinGuessingGame_4Coins
     */
    public function testCanExecute4Coins(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - 4 coins.txt',
            "2 8 4 6" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "5 coins".
     *
     * @group aCoinGuessingGame_5Coins
     */
    public function testCanExecute5Coins(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - 5 coins.txt',
            "10 4 8 2 6" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "10 coins".
     *
     * @group aCoinGuessingGame_10Coins
     */
    public function testCanExecute10Coins(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - 10 coins.txt',
            "18 16 14 12 2 10 20 8 4 6" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "25 coins".
     *
     * @group aCoinGuessingGame_25Coins
     */
    public function testCanExecute25Coins(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - 25 coins.txt',
            "16 30 26 46 12 34 36 10 22 38 24 44 8 6 20 28 50 40 4 48 42 2 18 14 32" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "50 coins".
     *
     * @group aCoinGuessingGame_50Coins
     */
    public function testCanExecute50Coins(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - 50 coins.txt',
            file_get_contents(__DIR__ . '/output/07 - 50 coins.txt')
        );
    }

    /**
     * Test that the code can be executed for "100 coins".
     *
     * @group aCoinGuessingGame_100Coins
     */
    public function testCanExecute100Coins(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - 100 coins.txt',
            file_get_contents(__DIR__ . '/output/08 - 100 coins.txt')
        );
    }

    /**
     * Test that the code can be executed for "150 coins".
     *
     * @group aCoinGuessingGame_150Coins
     */
    public function testCanExecute150Coins(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/09 - 150 coins.txt',
            file_get_contents(__DIR__ . '/output/09 - 150 coins.txt')
        );
    }
}
