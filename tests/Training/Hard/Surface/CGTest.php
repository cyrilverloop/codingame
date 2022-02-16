<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Training\Hard\Surface;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Training\Hard\Surface\Surface;

/**
 * Tests for the "Surface" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Training\Hard\Surface\Surface
 * @group surface
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new Surface();
    }

    /**
     * Test that the code can be executed for "Example of the statement".
     *
     * @group surface_exampleOfTheStatement
     */
    public function testCanExecuteExampleOfTheStatement(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - example of the statement.txt',
            file_get_contents(__DIR__ . '/output/01 - example of the statement.txt')
        );
    }

    /**
     * Test that the code can be executed for "No lake".
     *
     * @group surface_noLake
     */
    public function testCanExecuteNoLake(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - no lake.txt',
            0 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "The area is a lake".
     *
     * @group surface_theAreaIsALake
     */
    public function testCanExecuteTheAreaIsALake(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - the area is a lake.txt',
            file_get_contents(__DIR__ . '/output/03 - the area is a lake.txt')
        );
    }

    /**
     * Test that the code can be executed for "1 lake on a small map".
     *
     * @group surface_1LakeOnASmallMap
     */
    public function testCanExecute1LakeOnASmallMap(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - 1 lake on a small map.txt',
            file_get_contents(__DIR__ . '/output/04 - 1 lake on a small map.txt')
        );
    }

    /**
     * Test that the code can be executed for "Several lakes on a small map".
     *
     * @group surface_severalLakesOnASmallMap
     */
    public function testCanExecuteSeveralLakesOnASmallMap(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - several lakes on a small map.txt',
            file_get_contents(__DIR__ . '/output/05 - several lakes on a small map.txt')
        );
    }

    /**
     * Test that the code can be executed for "Some lakes on a 20x20 map".
     *
     * @group surface_someLakesOnA20x20Map
     */
    public function testCanExecuteSomeLakesOnA20x20Map(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - some lakes on a 20x20 map.txt',
            file_get_contents(__DIR__ . '/output/06 - some lakes on a 20x20 map.txt')
        );
    }

    /**
     * Test that the code can be executed for "Many lakes on a 100x50 map".
     *
     * @group surface_manyLakesOnA100x50Map
     */
    public function testCanExecuteManyLakesOnA100x50Map(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - many lakes on a 100x50 map.txt',
            file_get_contents(__DIR__ . '/output/07 - many lakes on a 100x50 map.txt')
        );
    }

    /**
     * Test that the code can be executed for "100 tests on a 1000x1000 map".
     *
     * @group surface_100TestsOnA1000x1000Map
     */
    public function testCanExecute100TestsOnA1000x1000Map(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - 100 tests on a 1000x1000 map.txt',
            file_get_contents(__DIR__ . '/output/08 - 100 tests on a 1000x1000 map.txt')
        );
    }

    /**
     * Test that the code can be executed for "Large map, large lake".
     *
     * @group surface_largeMapLargeLake
     */
    public function testCanExecuteLargeMapLargeLake(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/09 - large map, large lake.txt',
            359997 . PHP_EOL
        );
    }
}
