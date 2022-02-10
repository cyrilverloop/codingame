<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Training\Medium\TheGift;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Training\Medium\TheGift\TheGift;

/**
 * Tests for the "The gift" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Training\Medium\TheGift\TheGift
 * @group theGift
 */
final class TheGiftTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new TheGift();
    }

    /**
     * Test that the code can be executed for "Example 1".
     *
     * @group conwaySequence_example1
     */
    public function testCanExecuteExample1(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - example 1.txt',
            'IMPOSSIBLE' . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Example 2".
     *
     * @group conwaySequence_example2
     */
    public function testCanExecuteExample2(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - example 2.txt',
            file_get_contents(__DIR__ . '/output/02 - example 2.txt')
        );
    }

    /**
     * Test that the code can be executed for "Example 3".
     *
     * @group conwaySequence_example3
     */
    public function testCanExecuteExample3(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - example 3.txt',
            file_get_contents(__DIR__ . '/output/03 - example 3.txt')
        );
    }

    /**
     * Test that the code can be executed for "Impossible".
     *
     * @group conwaySequence_impossible
     */
    public function testCanExecuteImpossible(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - impossible.txt',
            'IMPOSSIBLE' . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Sort".
     *
     * @group conwaySequence_sort
     */
    public function testCanExecuteSort(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - sort.txt',
            file_get_contents(__DIR__ . '/output/05 - sort.txt')
        );
    }

    /**
     * Test that the code can be executed for "Budget limit".
     *
     * @group conwaySequence_budgetLimit
     */
    public function testCanExecuteBudgetLimit(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - budget Limit.txt',
            file_get_contents(__DIR__ . '/output/06 - budget Limit.txt')
        );
    }

    /**
     * Test that the code can be executed for "Several solutions budget".
     *
     * @group conwaySequence_severalSolutionsBudget
     */
    public function testCanExecuteSeveralSolutionsBudget(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - several solutions budget.txt',
            file_get_contents(__DIR__ . '/output/07 - several solutions budget.txt')
        );
    }

    /**
     * Test that the code can be executed for "Several solution fast".
     *
     * @group conwaySequence_severalSolutionFast
     */
    public function testCanExecuteSeveralSolutionFast(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - several solution fast.txt',
            file_get_contents(__DIR__ . '/output/08 - several solution fast.txt')
        );
    }

    /**
     * Test that the code can be executed for "Big random".
     *
     * @group conwaySequence_bigRandom
     */
    public function testCanExecuteBigRandom(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/09 - big random.txt',
            file_get_contents(__DIR__ . '/output/09 - big random.txt')
        );
    }
}
