<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\TwoPlayerGameOnACalculator;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\TwoPlayerGameOnACalculator\TwoPlayerGameOnACalculator;

/**
 * Tests for the "2-player game on a calculator" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\TwoPlayerGameOnACalculator\TwoPlayerGameOnACalculator
 * @group twoPlayerGameOnACalculator
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new TwoPlayerGameOnACalculator();
    }

    /**
     * Test that the code can be executed for "Test 1".
     *
     * @group twoPlayerGameOnACalculator_test1
     */
    public function testCanExecuteTest1(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - test 1.txt',
            "1 2" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 2".
     *
     * @group twoPlayerGameOnACalculator_test2
     */
    public function testCanExecuteTest2(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - test 2.txt',
            "1 7 8 9" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 3".
     *
     * @group twoPlayerGameOnACalculator_test3
     */
    public function testCanExecuteTest3(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - test 3.txt',
            "1 3 7" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 4".
     *
     * @group twoPlayerGameOnACalculator_test4
     */
    public function testCanExecuteTest4(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - test 4.txt',
            "1 3 7 9" . PHP_EOL
        );
    }
}
