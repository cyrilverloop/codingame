<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\LTriominoes;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\LTriominoes\LTriominoes;

/**
 * Tests for the "L-triominoes" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\LTriominoes\LTriominoes
 * @group LTriominoes
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new LTriominoes();
    }

    /**
     * Test that the code can be executed for "Test 1 : 2x2".
     *
     * @group LTriominoes_test1-2x2
     */
    public function testCanExecuteTest12x2(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - test 1 : 2x2.txt',
            file_get_contents(__DIR__ . '/output/01 - test 1 : 2x2.txt')
        );
    }

    /**
     * Test that the code can be executed for "Test 2 : 4x4".
     *
     * @group LTriominoes_test2-4x4
     */
    public function testCanExecuteTest24x4(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - test 2 : 4x4.txt',
            file_get_contents(__DIR__ . '/output/02 - test 2 : 4x4.txt')
        );
    }

    /**
     * Test that the code can be executed for "Test 3 : 8x8".
     *
     * @group LTriominoes_test3-8x8
     */
    public function testCanExecuteTest38x8(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - test 3 : 8x8.txt',
            file_get_contents(__DIR__ . '/output/03 - test 3 : 8x8.txt')
        );
    }

    /**
     * Test that the code can be executed for "Test 4 : 8x8".
     *
     * @group LTriominoes_test4-8x8
     */
    public function testCanExecuteTest48x8(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - test 4 : 8x8.txt',
            file_get_contents(__DIR__ . '/output/04 - test 4 : 8x8.txt')
        );
    }
}
