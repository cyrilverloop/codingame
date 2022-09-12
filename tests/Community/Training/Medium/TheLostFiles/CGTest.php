<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\TheLostFiles;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Medium\TheLostFiles\TheLostFiles;

/**
 * Tests for the "The lost files" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\TheLostFiles\TheLostFiles
 * @group theLostFiles
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new TheLostFiles();
    }

    /**
     * Test that the code can be executed for "Small example".
     *
     * @group theLostFiles_smallExample
     */
    public function testCanExecuteSmallExample(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - small example.txt',
            "2 4" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Single continent with big tiles".
     *
     * @group theLostFiles_singleContinentWithBigTiles
     */
    public function testCanExecuteSingleContinentWithBigTiles(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - single continent with big tiles.txt',
            "1 16" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Many islands".
     *
     * @group theLostFiles_manyIslands
     */
    public function testCanExecuteManyIslands(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - many islands.txt',
            "10 20" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Complex map".
     *
     * @group theLostFiles_complexMap
     */
    public function testCanExecuteComplexMap(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - complex map.txt',
            "3 130" . PHP_EOL
        );
    }
}
