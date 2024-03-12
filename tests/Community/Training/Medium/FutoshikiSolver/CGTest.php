<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\FutoshikiSolver;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\FutoshikiSolver\FutoshikiSolver;

/**
 * Tests for the "Futoshiki solver" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\FutoshikiSolver\FutoshikiSolver
 * @group futoshikiSolver
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new FutoshikiSolver();
    }

    /**
     * Test that the code can be executed for "No comparisons".
     *
     * @group futoshikiSolver_noComparisons
     */
    public function testCanExecuteNoComparisons(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - no comparisons.txt',
            file_get_contents(__DIR__ . '/output/01 - no comparisons.txt')
        );
    }

    /**
     * Test that the code can be executed for "Comparisons only horizontal".
     *
     * @group futoshikiSolver_comparisonsOnlyHorizontal
     */
    public function testCanExecuteComparisonsOnlyHorizontal(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - comparisons only horizontal.txt',
            file_get_contents(__DIR__ . '/output/02 - comparisons only horizontal.txt')
        );
    }

    /**
     * Test that the code can be executed for "Comparisons only vertical".
     *
     * @group futoshikiSolver_comparisonsOnlyVertical
     */
    public function testCanExecuteComparisonsOnlyVertical(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - comparisons only vertical.txt',
            file_get_contents(__DIR__ . '/output/03 - comparisons only vertical.txt')
        );
    }

    /**
     * Test that the code can be executed for "5x5".
     *
     * @group futoshikiSolver_5x5
     */
    public function testCanExecute5x5(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - 5x5.txt',
            file_get_contents(__DIR__ . '/output/04 - 5x5.txt')
        );
    }

    /**
     * Test that the code can be executed for "7x7".
     *
     * @group futoshikiSolver_7x7
     */
    public function testCanExecute7x7(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - 7x7.txt',
            file_get_contents(__DIR__ . '/output/05 - 7x7.txt')
        );
    }

    /**
     * Test that the code can be executed for "More 5x5".
     *
     * @group futoshikiSolver_more5x5
     */
    public function testCanExecuteMore5x5(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - more 5x5.txt',
            file_get_contents(__DIR__ . '/output/06 - more 5x5.txt')
        );
    }

    /**
     * Test that the code can be executed for "4x4".
     *
     * @group futoshikiSolver_4x4
     */
    public function testCanExecute4x4(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - 4x4.txt',
            file_get_contents(__DIR__ . '/output/07 - 4x4.txt')
        );
    }

    /**
     * Test that the code can be executed for "6x6".
     *
     * @group futoshikiSolver_6x6
     */
    public function testCanExecute6x6(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - 6x6.txt',
            file_get_contents(__DIR__ . '/output/08 - 6x6.txt')
        );
    }

    /**
     * Test that the code can be executed for "More 6x6".
     *
     * @group futoshikiSolver_more6x6
     */
    public function testCanExecuteMore6x6(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/09 - more 6x6.txt',
            file_get_contents(__DIR__ . '/output/09 - more 6x6.txt')
        );
    }

    /**
     * Test that the code can be executed for "3x3".
     *
     * @group futoshikiSolver_3x3
     */
    public function testCanExecute3x3(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/10 - 3x3.txt',
            file_get_contents(__DIR__ . '/output/10 - 3x3.txt')
        );
    }

    /**
     * Test that the code can be executed for "1x1".
     *
     * @group futoshikiSolver_1x1
     */
    public function testCanExecute1x1(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/11 - 1x1.txt',
            1 . PHP_EOL
        );
    }
}
