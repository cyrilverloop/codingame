<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\TheVoucher;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Medium\TheVoucher\TheVoucher;

/**
 * Tests for the "The voucher" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\TheVoucher\TheVoucher
 * @group theVoucher
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new TheVoucher();
    }

    /**
     * Test that the code can be executed for "1) Example".
     *
     * @group theVoucher_example
     */
    public function testCanExecuteExample(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - example.txt',
            1 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "2) 3 copies of each".
     *
     * @group theVoucher_3CopiesOfEach
     */
    public function testCanExecute3CopiesOfEach(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - 3 copies of each.txt',
            1 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "3) many solutions".
     *
     * @group theVoucher_manySolutions
     */
    public function testCanExecuteManySolutions(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - many solutions.txt',
            2 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "4) different products with same price".
     *
     * @group theVoucher_differentProductsWithSamePrice
     */
    public function testCanExecuteDifferentProductsWithSamePrice(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - different products with same price.txt',
            40 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "5) more money".
     *
     * @group theVoucher_moreMoney
     */
    public function testCanExecuteMoreMoney(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - more money.txt',
            13 . PHP_EOL
        );
    }
}
