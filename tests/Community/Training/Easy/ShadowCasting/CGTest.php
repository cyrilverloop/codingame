<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\ShadowCasting;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\ShadowCasting\ShadowCasting;

/**
 * Tests for the "Shadow casting" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\ShadowCasting\ShadowCasting
 * @group shadowCasting
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new ShadowCasting();
    }

    /**
     * Test that the code can be executed for "X".
     *
     * @group shadowCasting_X
     */
    public function testCanExecuteX(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - X.txt',
            file_get_contents(__DIR__ . '/output/01 - X.txt')
        );
    }

    /**
     * Test that the code can be executed for "Square".
     *
     * @group shadowCasting_square
     */
    public function testCanExecuteSquare(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - square.txt',
            file_get_contents(__DIR__ . '/output/02 - square.txt')
        );
    }

    /**
     * Test that the code can be executed for "Coding games".
     *
     * @group shadowCasting_codingGames
     */
    public function testCanExecuteCodingGames(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - coding games.txt',
            file_get_contents(__DIR__ . '/output/03 - coding games.txt')
        );
    }

    /**
     * Test that the code can be executed for "ASCII".
     *
     * @group shadowCasting_ASCII
     */
    public function testCanExecuteASCII(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - ASCII.txt',
            file_get_contents(__DIR__ . '/output/04 - ASCII.txt')
        );
    }
}
