<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\MerlinsMagicSquare;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\MerlinsMagicSquare\MerlinsMagicSquare;

/**
 * Tests for the "Merlin's magic square" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\MerlinsMagicSquare\MerlinsMagicSquare
 * @group merlinsMagicSquare
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new MerlinsMagicSquare();
    }

    /**
     * Test that the code can be executed for "Simple".
     *
     * @group merlinsMagicSquare_simple
     */
    public function testCanExecuteSimple(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - simple.txt',
            6 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 2".
     *
     * @group merlinsMagicSquare_test2
     */
    public function testCanExecuteTest2(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - test 2.txt',
            8 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 3".
     *
     * @group merlinsMagicSquare_test3
     */
    public function testCanExecuteTest3(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - test 3.txt',
            5 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 4".
     *
     * @group merlinsMagicSquare_test4
     */
    public function testCanExecuteTest4(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - test 4.txt',
            7 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 5".
     *
     * @group merlinsMagicSquare_test5
     */
    public function testCanExecuteTest5(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - test 5.txt',
            9 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 6".
     *
     * @group merlinsMagicSquare_test6
     */
    public function testCanExecuteTest6(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - test 6.txt',
            5 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 7".
     *
     * @group merlinsMagicSquare_test7
     */
    public function testCanExecuteTest7(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - test 7.txt',
            3 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 8".
     *
     * @group merlinsMagicSquare_test8
     */
    public function testCanExecuteTest8(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - test 8.txt',
            8 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 9".
     *
     * @group merlinsMagicSquare_test9
     */
    public function testCanExecuteTest9(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/09 - test 9.txt',
            9 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Lizzo is making this too hard".
     *
     * @group merlinsMagicSquare_lizzoIsMakingThisTooHard
     */
    public function testCanExecuteLizzoIsMakingThisTooHard(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/10 - lizzo is making this too hard.txt',
            8 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "One button".
     *
     * @group merlinsMagicSquare_oneButton
     */
    public function testCanExecuteOneButton(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/11 - one button.txt',
            7 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Now you're just messing around".
     *
     * @group merlinsMagicSquare_nowYoureJustMessingAround
     */
    public function testCanExecuteNowYoureJustMessingAround(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/12 - now you\'re just messing around.txt',
            1 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 13".
     *
     * @group merlinsMagicSquare_test13
     */
    public function testCanExecuteTest13(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/13 - test 13.txt',
            6 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 14".
     *
     * @group merlinsMagicSquare_test14
     */
    public function testCanExecuteTest14(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/14 - test 14.txt',
            4 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 15".
     *
     * @group merlinsMagicSquare_test15
     */
    public function testCanExecuteTest15(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/15 - test 15.txt',
            8 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 16".
     *
     * @group merlinsMagicSquare_test16
     */
    public function testCanExecuteTest16(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/16 - test 16.txt',
            4 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 17".
     *
     * @group merlinsMagicSquare_test17
     */
    public function testCanExecuteTest17(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/17 - test 17.txt',
            5 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 18".
     *
     * @group merlinsMagicSquare_test18
     */
    public function testCanExecuteTest18(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/18 - test 18.txt',
            7 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 19".
     *
     * @group merlinsMagicSquare_test19
     */
    public function testCanExecuteTest19(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/19 - test 19.txt',
            8 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 20".
     *
     * @group merlinsMagicSquare_test20
     */
    public function testCanExecuteTest20(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/20 - test 20.txt',
            3 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 21".
     *
     * @group merlinsMagicSquare_test21
     */
    public function testCanExecuteTest21(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/21 - test 21.txt',
            3 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 22".
     *
     * @group merlinsMagicSquare_test22
     */
    public function testCanExecuteTest22(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/22 - test 22.txt',
            9 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 23".
     *
     * @group merlinsMagicSquare_test23
     */
    public function testCanExecuteTest23(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/23 - test 23.txt',
            1 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 24".
     *
     * @group merlinsMagicSquare_test24
     */
    public function testCanExecuteTest24(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/24 - test 24.txt',
            4 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 25".
     *
     * @group merlinsMagicSquare_test25
     */
    public function testCanExecuteTest25(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/25 - test 25.txt',
            7 . PHP_EOL
        );
    }
}
