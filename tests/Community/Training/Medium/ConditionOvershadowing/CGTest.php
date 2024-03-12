<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\ConditionOvershadowing;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\ConditionOvershadowing\ConditionOvershadowing;

/**
 * Tests for the "Condition overshadowing" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\ConditionOvershadowing\ConditionOvershadowing
 * @group conditionOvershadowing
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new ConditionOvershadowing();
    }

    /**
     * Test that the code can be executed for "Test 1".
     *
     * @group conditionOvershadowing_test1
     */
    public function testCanExecuteTest1(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - test 1.txt',
            "1 4" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 2".
     *
     * @group conditionOvershadowing_test2
     */
    public function testCanExecuteTest2(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - test 2.txt',
            "ok" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 3".
     *
     * @group conditionOvershadowing_test3
     */
    public function testCanExecuteTest3(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - test 3.txt',
            "1 2" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 4".
     *
     * @group conditionOvershadowing_test4
     */
    public function testCanExecuteTest4(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - test 4.txt',
            "2 3" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 5".
     *
     * @group conditionOvershadowing_test5
     */
    public function testCanExecuteTest5(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - test 5.txt',
            "1 2" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 6".
     *
     * @group conditionOvershadowing_test6
     */
    public function testCanExecuteTest6(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - test 6.txt',
            "4 5" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 7".
     *
     * @group conditionOvershadowing_test7
     */
    public function testCanExecuteTest7(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - test 7.txt',
            "2" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 8".
     *
     * @group conditionOvershadowing_test8
     */
    public function testCanExecuteTest8(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - test 8.txt',
            "2 3 5 6 7" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 9".
     *
     * @group conditionOvershadowing_test9
     */
    public function testCanExecuteTest9(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/09 - test 9.txt',
            "2 3" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 10".
     *
     * @group conditionOvershadowing_test10
     */
    public function testCanExecuteTest10(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/10 - test 10.txt',
            "1 2 4" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 11".
     *
     * @group conditionOvershadowing_test11
     */
    public function testCanExecuteTest11(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/11 - test 11.txt',
            "1 3 5 7" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 12".
     *
     * @group conditionOvershadowing_test12
     */
    public function testCanExecuteTest12(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/12 - test 12.txt',
            "5" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 13".
     *
     * @group conditionOvershadowing_test13
     */
    public function testCanExecuteTest13(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/13 - test 13.txt',
            "2 3" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 14".
     *
     * @group conditionOvershadowing_test14
     */
    public function testCanExecuteTest14(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/14 - test 14.txt',
            "2 3" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 15".
     *
     * @group conditionOvershadowing_test15
     */
    public function testCanExecuteTest15(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/15 - test 15.txt',
            "2 3" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 16".
     *
     * @group conditionOvershadowing_test16
     */
    public function testCanExecuteTest16(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/16 - test 16.txt',
            "2" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 17".
     *
     * @group conditionOvershadowing_test17
     */
    public function testCanExecuteTest17(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/17 - test 17.txt',
            "3 4" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 18".
     *
     * @group conditionOvershadowing_test18
     */
    public function testCanExecuteTest18(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/18 - test 18.txt',
            "2" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 19".
     *
     * @group conditionOvershadowing_test19
     */
    public function testCanExecuteTest19(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/19 - test 19.txt',
            "ok" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 20".
     *
     * @group conditionOvershadowing_test20
     */
    public function testCanExecuteTest20(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/20 - test 20.txt',
            "1 2 3 4" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 21".
     *
     * @group conditionOvershadowing_test21
     */
    public function testCanExecuteTest21(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/21 - test 21.txt',
            "4" . PHP_EOL
        );
    }
}
