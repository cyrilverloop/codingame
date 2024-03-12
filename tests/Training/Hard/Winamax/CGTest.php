<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Training\Hard\Winamax;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Training\Hard\Winamax\Winamax;

/**
 * Tests for the "Winamax" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Training\Hard\Winamax\Winamax
 * @group winamax
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new Winamax();
    }

    /**
     * Test that the code can be executed for "Test 1".
     *
     * @group winamax_test1
     */
    public function testCanExecuteTest1(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - test 1.txt',
            ">." . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 2".
     *
     * @group winamax_test2
     */
    public function testCanExecuteTest2(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - test 2.txt',
            file_get_contents(__DIR__ . '/output/02 - test 2.txt')
        );
    }

    /**
     * Test that the code can be executed for "Test 3".
     *
     * @group winamax_test3
     */
    public function testCanExecuteTest3(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - test 3.txt',
            file_get_contents(__DIR__ . '/output/03 - test 3.txt')
        );
    }

    /**
     * Test that the code can be executed for "Test 4".
     *
     * @group winamax_test4
     */
    public function testCanExecuteTest4(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - test 4.txt',
            file_get_contents(__DIR__ . '/output/04 - test 4.txt')
        );
    }

    /**
     * Test that the code can be executed for "Test 5".
     *
     * @group winamax_test5
     */
    public function testCanExecuteTest5(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - test 5.txt',
            file_get_contents(__DIR__ . '/output/05 - test 5.txt')
        );
    }

    /**
     * Test that the code can be executed for "Test 6".
     *
     * @group winamax_test6
     */
    public function testCanExecuteTest6(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - test 6.txt',
            file_get_contents(__DIR__ . '/output/06 - test 6.txt')
        );
    }

    /**
     * Test that the code can be executed for "Test 7".
     *
     * @group winamax_test7
     */
    public function testCanExecuteTest7(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - test 7.txt',
            file_get_contents(__DIR__ . '/output/07 - test 7.txt')
        );
    }

    /**
     * Test that the code can be executed for "Test 8".
     *
     * @group winamax_test8
     */
    public function testCanExecuteTest8(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - test 8.txt',
            file_get_contents(__DIR__ . '/output/08 - test 8.txt')
        );
    }

    /**
     * Test that the code can be executed for "Test 9".
     *
     * @group winamax_test9
     */
    public function testCanExecuteTest9(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/09 - test 9.txt',
            file_get_contents(__DIR__ . '/output/09 - test 9.txt')
        );
    }

    /**
     * Test that the code can be executed for "Test 10".
     *
     * @group winamax_test10
     */
    public function testCanExecuteTest10(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/10 - test 10.txt',
            file_get_contents(__DIR__ . '/output/10 - test 10.txt')
        );
    }

    /**
     * Test that the code can be executed for "Test 11".
     *
     * @group winamax_test11
     */
    public function testCanExecuteTest11(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/11 - test 11.txt',
            file_get_contents(__DIR__ . '/output/11 - test 11.txt')
        );
    }

    /**
     * Test that the code can be executed for "Test 12".
     *
     * @group winamax_test12
     */
    public function testCanExecuteTest12(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/12 - test 12.txt',
            file_get_contents(__DIR__ . '/output/12 - test 12.txt')
        );
    }

    /**
     * Test that the code can be executed for "Test 13".
     *
     * @group winamax_test13
     */
    public function testCanExecuteTest13(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/13 - test 13.txt',
            file_get_contents(__DIR__ . '/output/13 - test 13.txt')
        );
    }

    /**
     * Test that the code can be executed for "Test 14".
     *
     * @group winamax_test14
     */
    public function testCanExecuteTest14(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/14 - test 14.txt',
            file_get_contents(__DIR__ . '/output/14 - test 14.txt')
        );
    }

    /**
     * Test that the code can be executed for "Test 15".
     *
     * @group winamax_test15
     */
    public function testCanExecuteTest15(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/15 - test 15.txt',
            file_get_contents(__DIR__ . '/output/15 - test 15.txt')
        );
    }

    /**
     * Test that the code can be executed for "Test 16".
     *
     * @group winamax_test16
     */
    public function testCanExecuteTest16(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/16 - test 16.txt',
            file_get_contents(__DIR__ . '/output/16 - test 16.txt')
        );
    }

    /**
     * Test that the code can be executed for "Test 17".
     *
     * @group winamax_test17
     */
    public function testCanExecuteTest17(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/17 - test 17.txt',
            file_get_contents(__DIR__ . '/output/17 - test 17.txt')
        );
    }

    /**
     * Test that the code can be executed for "Test 18".
     *
     * @group winamax_test18
     */
    public function testCanExecuteTest18(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/18 - test 18.txt',
            file_get_contents(__DIR__ . '/output/18 - test 18.txt')
        );
    }

    /**
     * Test that the code can be executed for "Test 19".
     *
     * @group winamax_test19
     */
    public function testCanExecuteTest19(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/19 - test 19.txt',
            file_get_contents(__DIR__ . '/output/19 - test 19.txt')
        );
    }

    /**
     * Test that the code can be executed for "Test 20".
     *
     * @group winamax_test20
     */
    public function testCanExecuteTest20(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/20 - test 20.txt',
            file_get_contents(__DIR__ . '/output/20 - test 20.txt')
        );
    }

    /**
     * Test that the code can be executed for "Test 21".
     *
     * @group winamax_test21
     */
    public function testCanExecuteTest21(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/21 - test 21.txt',
            file_get_contents(__DIR__ . '/output/21 - test 21.txt')
        );
    }
}
