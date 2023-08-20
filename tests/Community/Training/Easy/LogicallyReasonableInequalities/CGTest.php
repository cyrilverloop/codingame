<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\LogicallyReasonableInequalities;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\LogicallyReasonableInequalities\LogicallyReasonableInequalities;

/**
 * Tests for the "Logically reasonable inequalities" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\LogicallyReasonableInequalities\LogicallyReasonableInequalities
 * @group logicallyReasonableInequalities
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new LogicallyReasonableInequalities();
    }

    /**
     * Test that the code can be executed for "Test 1".
     *
     * @group logicallyReasonableInequalities_test1
     */
    public function testCanExecuteTest1(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - test 1.txt',
            "consistent" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 2".
     *
     * @group logicallyReasonableInequalities_test2
     */
    public function testCanExecuteTest2(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - test 2.txt',
            "contradiction" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 3".
     *
     * @group logicallyReasonableInequalities_test3
     */
    public function testCanExecuteTest3(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - test 3.txt',
            "consistent" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 4".
     *
     * @group logicallyReasonableInequalities_test4
     */
    public function testCanExecuteTest4(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - test 4.txt',
            "contradiction" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 5".
     *
     * @group logicallyReasonableInequalities_test5
     */
    public function testCanExecuteTest5(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - test 5.txt',
            "contradiction" . PHP_EOL
        );
    }
}
