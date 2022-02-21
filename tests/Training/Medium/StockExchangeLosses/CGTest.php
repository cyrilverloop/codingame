<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Training\Medium\StockExchangeLosses;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Training\Medium\StockExchangeLosses\StockExchangeLosses;

/**
 * Tests for the "Stock Exchange Losses" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Training\Medium\StockExchangeLosses\StockExchangeLosses
 * @group stockExchangeLosses
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new StockExchangeLosses();
    }

    /**
     * Test that the code can be executed for "First case".
     *
     * @group stockExchangeLosses_firstCase
     */
    public function testCanExecuteSimpleAddition(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - first case.txt',
            -3 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Maximum loss between the first and last values".
     *
     * @group stockExchangeLosses_maximumLoss
     */
    public function testCanExecuteMaximumLoss(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - maximum loss.txt',
            -4 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Profit".
     *
     * @group stockExchangeLosses_profit
     */
    public function testCanExecuteProfit(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - profit.txt',
            0 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Profit 2".
     *
     * @group stockExchangeLosses_profit2
     */
    public function testCanExecuteProfit2(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - profit 2.txt',
            0 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Large dataset".
     *
     * @group stockExchangeLosses_largeDataset
     */
    public function testCanExecuteLargeDataset(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - large dataset.txt',
            -1073730311 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Varied".
     *
     * @group stockExchangeLosses_varied
     */
    public function testCanExecuteVaried(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - varied.txt',
            -3 . PHP_EOL
        );
    }
}
