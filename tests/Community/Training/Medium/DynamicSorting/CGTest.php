<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\DynamicSorting;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Medium\DynamicSorting\DynamicSorting;

/**
 * Tests for the "Dynamic sorting" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\DynamicSorting\DynamicSorting
 * @group dynamicSorting
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new DynamicSorting();
    }

    /**
     * Test that the code can be executed for "Simple name sorting".
     *
     * @group dynamicSorting_simpleNameSorting
     */
    public function testCanExecuteSimpleNameSorting(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - simple name sorting.txt',
            file_get_contents(__DIR__ . '/output/01 - simple name sorting.txt')
        );
    }

    /**
     * Test that the code can be executed for "ThenBy".
     *
     * @group dynamicSorting_thenBy
     */
    public function testCanExecuteThenBy(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - thenBy.txt',
            file_get_contents(__DIR__ . '/output/02 - thenBy.txt')
        );
    }

    /**
     * Test that the code can be executed for "Large dataset".
     *
     * @group dynamicSorting_largeDataset
     */
    public function testCanExecuteLargeDataset(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - large dataset.txt',
            file_get_contents(__DIR__ . '/output/03 - large dataset.txt')
        );
    }

    /**
     * Test that the code can be executed for "3 sorting parameters".
     *
     * @group dynamicSorting_3SortingParameters
     */
    public function testCanExecute3SortingParameters(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - 3 sorting parameters.txt',
            file_get_contents(__DIR__ . '/output/04 - 3 sorting parameters.txt')
        );
    }

    /**
     * Test that the code can be executed for "4 sorting parameters".
     *
     * @group dynamicSorting_4SortingParameters
     */
    public function testCanExecute4SortingParameters(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - 4 sorting parameters.txt',
            file_get_contents(__DIR__ . '/output/05 - 4 sorting parameters.txt')
        );
    }
}
