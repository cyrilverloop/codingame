<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\AChildsPlay;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\AChildsPlay\AChildsPlay;

/**
 * Tests for the "A child's play" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\AChildsPlay\AChildsPlay
 * @group aChildsPlay
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new AChildsPlay();
    }

    /**
     * Test that the code can be executed for "Test example".
     *
     * @group aChildsPlay_testExample
     */
    public function testCanExecuteTestExample(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - test example.txt',
            "7 1" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test real case".
     *
     * @group aChildsPlay_testRealCase
     */
    public function testCanExecuteTestRealCase(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - test real case.txt',
            "4 2" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 3".
     *
     * @group aChildsPlay_test3
     */
    public function testCanExecuteTest3(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - test 3.txt',
            "2 1" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 4".
     *
     * @group aChildsPlay_test4
     */
    public function testCanExecuteTest4(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - test 4.txt',
            "6 6" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 5".
     *
     * @group aChildsPlay_test5
     */
    public function testCanExecuteTest5(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - test 5.txt',
            "4 1" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 6".
     *
     * @group aChildsPlay_test6
     */
    public function testCanExecuteTest6(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - test 6.txt',
            "2 3" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 7".
     *
     * @group aChildsPlay_test7
     */
    public function testCanExecuteTest7(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - test 7.txt',
            "2 1" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 8".
     *
     * @group aChildsPlay_test8
     */
    public function testCanExecuteTest8(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - test 8.txt',
            "3 1" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 9".
     *
     * @group aChildsPlay_test9
     */
    public function testCanExecuteTest9(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/09 - test 9.txt',
            "1 3" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Loop detection 1".
     *
     * @group aChildsPlay_loopDetection1
     */
    public function testCanExecuteLoopDetection1(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/10 - loop detection 1.txt',
            "5 4" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Loop detection 2".
     *
     * @group aChildsPlay_loopDetection2
     */
    public function testCanExecuteLoopDetection2(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/11 - loop detection 2.txt',
            "2 2" . PHP_EOL
        );
    }
}
