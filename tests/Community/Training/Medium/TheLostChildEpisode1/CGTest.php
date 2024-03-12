<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\TheLostChildEpisode1;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\TheLostChildEpisode1\TheLostChildEpisode1;

/**
 * Tests for the "The lost child.Episode-1" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\TheLostChildEpisode1\TheLostChildEpisode1
 * @group theLostChildEpisode1
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new TheLostChildEpisode1();
    }

    /**
     * Test that the code can be executed for "Lost in playground".
     *
     * @group theLostChildEpisode1_lostInPlayground
     */
    public function testCanExecuteLostInPlayground(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - lost in playground.txt',
            "50km" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Lost in paris".
     *
     * @group theLostChildEpisode1_lostInParis
     */
    public function testCanExecuteLostInParis(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - lost in paris.txt',
            "120km" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Lost in jungle".
     *
     * @group theLostChildEpisode1_lostInJungle
     */
    public function testCanExecuteLostInJungle(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - lost in jungle.txt',
            "160km" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Lost in maze runner".
     *
     * @group theLostChildEpisode1_lostInMazeRunner
     */
    public function testCanExecuteLostInMazeRunner(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - lost in maze runner.txt',
            "200km" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Lost in space".
     *
     * @group theLostChildEpisode1_lostInSpace
     */
    public function testCanExecuteLostInSpace(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - lost in space.txt',
            "170km" . PHP_EOL
        );
    }
}
