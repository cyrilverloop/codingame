<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\FairNumbering;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Medium\FairNumbering\FairNumbering;

/**
 * Tests for the "Fair numbering" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\FairNumbering\FairNumbering
 * @group fairNumbering
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new FairNumbering();
    }

    /**
     * Test that the code can be executed for "Examples".
     *
     * @group fairNumbering_examples
     */
    public function testCanExecuteExamples(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - examples.txt',
            file_get_contents(__DIR__ . '/output/01 - examples.txt')
        );
    }

    /**
     * Test that the code can be executed for "Typical cases".
     *
     * @group fairNumbering_typicalCases
     */
    public function testCanExecuteTypicalCases(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - typical cases.txt',
            file_get_contents(__DIR__ . '/output/02 - typical cases.txt')
        );
    }

    /**
     * Test that the code can be executed for "Wide range".
     *
     * @group fairNumbering_wideRange
     */
    public function testCanExecuteWideRange(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - wide range.txt',
            file_get_contents(__DIR__ . '/output/03 - wide range.txt')
        );
    }

    /**
     * Test that the code can be executed for "Bigger numbers".
     *
     * @group fairNumbering_biggerNumbers
     */
    public function testCanExecuteBiggerNumbers(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - bigger numbers.txt',
            file_get_contents(__DIR__ . '/output/04 - bigger numbers.txt')
        );
    }

    /**
     * Test that the code can be executed for "Stress test 1".
     *
     * @group fairNumbering_stressTest1
     */
    public function testCanExecuteStressTest1(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - stress test 1.txt',
            file_get_contents(__DIR__ . '/output/05 - stress test 1.txt')
        );
    }

    /**
     * Test that the code can be executed for "Stress test 2".
     *
     * @group fairNumbering_stressTest2
     */
    public function testCanExecuteStressTest2(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - stress test 2.txt',
            file_get_contents(__DIR__ . '/output/06 - stress test 2.txt')
        );
    }

    /**
     * Test that the code can be executed for "Stress test 3".
     *
     * @group fairNumbering_stressTest3
     */
    public function testCanExecuteStressTest3(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - stress test 3.txt',
            file_get_contents(__DIR__ . '/output/07 - stress test 3.txt')
        );
    }
}
