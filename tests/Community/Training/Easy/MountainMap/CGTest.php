<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\MountainMap;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\MountainMap\MountainMap;

/**
 * Tests for the "Mountain map" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\MountainMap\MountainMap
 * @group mountainMap
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new MountainMap();
    }

    /**
     * Test that the code can be executed for "Test 1".
     *
     * @group mountainMap_test1
     */
    public function testCanExecuteTest1(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - test 1.txt',
            file_get_contents(__DIR__ . '/output/01 - test 1.txt')
        );
    }

    /**
     * Test that the code can be executed for "Test 2".
     *
     * @group MountainMap_test2
     */
    public function testCanExecuteTest2(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - test 2.txt',
            file_get_contents(__DIR__ . '/output/02 - test 2.txt')
        );
    }

    /**
     * Test that the code can be executed for "Test 3".
     *
     * @group MountainMap_test3
     */
    public function testCanExecuteTest3(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - test 3.txt',
            file_get_contents(__DIR__ . '/output/03 - test 3.txt')
        );
    }

    /**
     * Test that the code can be executed for "Test 4".
     *
     * @group MountainMap_test4
     */
    public function testCanExecuteTest4(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - test 4.txt',
            file_get_contents(__DIR__ . '/output/04 - test 4.txt')
        );
    }
}
