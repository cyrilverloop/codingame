<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\DDCGMapper;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\DDCGMapper\DDCGMapper;

/**
 * Tests for the "DDCG mapper" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\DDCGMapper\DDCGMapper
 * @group DDCGMapper
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new DDCGMapper();
    }

    /**
     * Test that the code can be executed for "Example".
     *
     * @group DDCGMapper_example
     */
    public function testCanExecuteExample(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - example.txt',
            file_get_contents(__DIR__ . '/output/01 - example.txt')
        );
    }

    /**
     * Test that the code can be executed for "1".
     *
     * @group DDCGMapper_1
     */
    public function testCanExecute1(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - 1.txt',
            file_get_contents(__DIR__ . '/output/02 - 1.txt')
        );
    }

    /**
     * Test that the code can be executed for "2".
     *
     * @group DDCGMapper_2
     */
    public function testCanExecute2(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - 2.txt',
            file_get_contents(__DIR__ . '/output/03 - 2.txt')
        );
    }

    /**
     * Test that the code can be executed for "3".
     *
     * @group DDCGMapper_3
     */
    public function testCanExecute3(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - 3.txt',
            file_get_contents(__DIR__ . '/output/04 - 3.txt')
        );
    }
}
