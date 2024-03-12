<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\CaesarIsTheChief;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\CaesarIsTheChief\CaesarIsTheChief;

/**
 * Tests for the "Caesar is the chief" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\CaesarIsTheChief\CaesarIsTheChief
 * @group caesarIsTheChief
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new CaesarIsTheChief();
    }

    /**
     * Test that the code can be executed for "Test 1".
     *
     * @group caesarIsTheChief_test1
     */
    public function testCanExecuteTest1(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - test 1.txt',
            "WRONG MESSAGE" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 2".
     *
     * @group caesarIsTheChief_test2
     */
    public function testCanExecuteTest2(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - test 2.txt',
            "CHIEF" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 3".
     *
     * @group caesarIsTheChief_test3
     */
    public function testCanExecuteTest3(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - test 3.txt',
            "CHIEF IS WRONG" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 4".
     *
     * @group caesarIsTheChief_test4
     */
    public function testCanExecuteTest4(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - test 4.txt',
            "WRONG MESSAGE" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 5".
     *
     * @group caesarIsTheChief_test5
     */
    public function testCanExecuteTest5(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - test 5.txt',
            "WRONG MESSAGE" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 6".
     *
     * @group caesarIsTheChief_test6
     */
    public function testCanExecuteTest6(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - test 6.txt',
            "BATTLE LOST CHIEF" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 7".
     *
     * @group caesarIsTheChief_test7
     */
    public function testCanExecuteTest7(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - test 7.txt',
            "WRONG MESSAGE" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 8".
     *
     * @group caesarIsTheChief_test8
     */
    public function testCanExecuteTest8(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - test 8.txt',
            "ZORGLUB IS THE BEST CHIEF" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 9".
     *
     * @group caesarIsTheChief_test9
     */
    public function testCanExecuteTest9(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/09 - test 9.txt',
            "LONG LIFE TO THE CHIEF" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 10".
     *
     * @group caesarIsTheChief_test10
     */
    public function testCanExecuteTest10(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/10 - test 10.txt',
            "CHIEF IS CHIEF" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 11".
     *
     * @group caesarIsTheChief_test11
     */
    public function testCanExecuteTest11(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/11 - test 11.txt',
            "OUR CHIEF IS THE BEST" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 12".
     *
     * @group caesarIsTheChief_test12
     */
    public function testCanExecuteTest12(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/12 - test 12.txt',
            "WRONG MESSAGE" . PHP_EOL
        );
    }
}
