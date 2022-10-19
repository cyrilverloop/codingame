<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\ThreeByNTiling;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Medium\ThreeByNTiling\ThreeByNTiling;

/**
 * Tests for the "3×N tiling" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\ThreeByNTiling\ThreeByNTiling
 * @group threeByNTiling
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new ThreeByNTiling();
    }

    /**
     * Test that the code can be executed for "1×N possible".
     *
     * @group threeByNTiling_1ByNPossible
     */
    public function testCanExecute1ByNPossible(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - 1×N possible.txt',
            file_get_contents(__DIR__ . '/output/01 - 1×N possible.txt')
        );
    }

    /**
     * Test that the code can be executed for "1×N impossible".
     *
     * @group threeByNTiling_1ByNImpossible
     */
    public function testCanExecute1ByNImpossible(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - 1×N impossible.txt',
            file_get_contents(__DIR__ . '/output/02 - 1×N impossible.txt')
        );
    }

    /**
     * Test that the code can be executed for "1×N mixed".
     *
     * @group threeByNTiling_1ByNMixed
     */
    public function testCanExecute1ByNMixed(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - 1×N mixed.txt',
            file_get_contents(__DIR__ . '/output/03 - 1×N mixed.txt')
        );
    }

    /**
     * Test that the code can be executed for "2×N simple".
     *
     * @group threeByNTiling_2ByNSimple
     */
    public function testCanExecute2ByNSimple(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - 2×N simple.txt',
            file_get_contents(__DIR__ . '/output/04 - 2×N simple.txt')
        );
    }

    /**
     * Test that the code can be executed for "2×N intermediate".
     *
     * @group threeByNTiling_2ByNIntermediate
     */
    public function testCanExecute2ByNIntermediate(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - 2×N intermediate.txt',
            file_get_contents(__DIR__ . '/output/05 - 2×N intermediate.txt')
        );
    }

    /**
     * Test that the code can be executed for "2×N advanced".
     *
     * @group threeByNTiling_2ByNAdvanced
     */
    public function testCanExecute2ByNAdvanced(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - 2×N advanced.txt',
            file_get_contents(__DIR__ . '/output/06 - 2×N advanced.txt')
        );
    }

    /**
     * Test that the code can be executed for "3×N simple".
     *
     * @group threeByNTiling_3ByNSimple
     */
    public function testCanExecute3ByNSimple(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - 3×N simple.txt',
            file_get_contents(__DIR__ . '/output/07 - 3×N simple.txt')
        );
    }

    /**
     * Test that the code can be executed for "3×N intermediate".
     *
     * @group threeByNTiling_3ByNIntermediate
     */
    public function testCanExecute3ByNIntermediate(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - 3×N intermediate.txt',
            file_get_contents(__DIR__ . '/output/08 - 3×N intermediate.txt')
        );
    }

    /**
     * Test that the code can be executed for "3×N advanced".
     *
     * @group threeByNTiling_3ByNAdvanced
     */
    public function testCanExecute3ByNAdvanced(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/09 - 3×N advanced.txt',
            file_get_contents(__DIR__ . '/output/09 - 3×N advanced.txt')
        );
    }

    /**
     * Test that the code can be executed for "Mixed".
     *
     * @group threeByNTiling_mixed
     */
    public function testCanExecuteMixed(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/10 - mixed.txt',
            file_get_contents(__DIR__ . '/output/10 - mixed.txt')
        );
    }

    /**
     * Test that the code can be executed for "You might want to check these".
     *
     * @group threeByNTiling_youMightWantToCheckThese
     */
    public function testCanExecuteYouMightWantToCheckThese(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/11 - you might want to check these.txt',
            file_get_contents(__DIR__ . '/output/11 - you might want to check these.txt')
        );
    }
}
