<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\DuckHunt;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Medium\DuckHunt\DuckHunt;

/**
 * Tests for the "Duck hunt" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\DuckHunt\DuckHunt
 * @group duckHunt
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new DuckHunt();
    }

    /**
     * Test that the code can be executed for "Example".
     *
     * @group duckHunt_example
     */
    public function testCanExecuteExample(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - example.txt',
            file_get_contents(__DIR__ . '/output/01 - example.txt')
        );
    }

    /**
     * Test that the code can be executed for "Foursome".
     *
     * @group duckHunt_foursome
     */
    public function testCanExecuteFoursome(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - foursome.txt',
            file_get_contents(__DIR__ . '/output/02 - foursome.txt')
        );
    }

    /**
     * Test that the code can be executed for "The race".
     *
     * @group duckHunt_theRace
     */
    public function testCanExecuteTheRace(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - the race.txt',
            file_get_contents(__DIR__ . '/output/03 - the race.txt')
        );
    }

    /**
     * Test that the code can be executed for "Can't shoot all".
     *
     * @group duckHunt_cantShootAll
     */
    public function testCanExecuteCantShootAll(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - can\'t shoot all.txt',
            file_get_contents(__DIR__ . '/output/04 - can\'t shoot all.txt')
        );
    }
}
