<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\NoMorePythonsPlease;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\NoMorePythonsPlease\NoMorePythonsPlease;

/**
 * Tests for the "No more pythons, please!" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\NoMorePythonsPlease\NoMorePythonsPlease
 * @group noMorePythonsPlease
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new NoMorePythonsPlease();
    }

    /**
     * Test that the code can be executed for "Easy (one snake)".
     *
     * @group noMorePythonsPlease_easyOneSnake
     */
    public function testCanExecuteEasyOneSnake(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - easy (one snake).txt',
            file_get_contents(__DIR__ . '/output/01 - easy (one snake).txt')
        );
    }

    /**
     * Test that the code can be executed for "Medium 1 (3 snakes, one pattern)".
     *
     * @group noMorePythonsPlease_medium13SnakesOnePattern
     */
    public function testCanExecuteMedium13SnakesOnePattern(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - medium 1 (3 snakes, one pattern).txt',
            file_get_contents(__DIR__ . '/output/02 - medium 1 (3 snakes, one pattern).txt')
        );
    }

    /**
     * Test that the code can be executed for "Medium 2 (more than 1 large snake)".
     *
     * @group noMorePythonsPlease_medium2MoreThan1LargeSnake
     */
    public function testCanExecuteMedium2MoreThan1LargeSnake(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - medium 2 (more than 1 large snake).txt',
            file_get_contents(__DIR__ . '/output/03 - medium 2 (more than 1 large snake).txt')
        );
    }

    /**
     * Test that the code can be executed for "Hard (one VERY large snake)".
     *
     * @group noMorePythonsPlease_hardOneVERYLargeSnake
     */
    public function testCanExecuteHardOneVERYLargeSnake(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - hard (one VERY large snake).txt',
            file_get_contents(__DIR__ . '/output/04 - hard (one VERY large snake).txt')
        );
    }

    /**
     * Test that the code can be executed for "Snake madness (for geeks)".
     *
     * @group noMorePythonsPlease_snakeMadnessForGeeks
     */
    public function testCanExecuteSnakeMadnessForGeeks(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - snake madness (for geeks).txt',
            file_get_contents(__DIR__ . '/output/05 - snake madness (for geeks).txt')
        );
    }
}
