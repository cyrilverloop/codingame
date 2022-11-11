<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\DominoesPath;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Medium\DominoesPath\DominoesPath;

/**
 * Tests for the "Dominoes path" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\DominoesPath\DominoesPath
 * @group dominoesPath
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new DominoesPath();
    }

    /**
     * Test that the code can be executed for "Example".
     *
     * @group dominoesPath_example
     */
    public function testCanExecuteExample(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - example.txt',
            "true" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "No path (easy)".
     *
     * @group dominoesPath_noPathEasy
     */
    public function testCanExecuteNoPathEasy(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - no path (easy).txt',
            "false" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Longer path in order".
     *
     * @group dominoesPath_longerPathInOrder
     */
    public function testCanExecuteLongerPathInOrder(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - longer path in order.txt',
            "true" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Broken path".
     *
     * @group dominoesPath_brokenPath
     */
    public function testCanExecuteBrokenPath(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - broken path.txt',
            "false" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Long path scrambled".
     *
     * @group dominoesPath_longPathScrambled
     */
    public function testCanExecuteLongPathScrambled(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - long path scrambled.txt',
            "true" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Long invalid sequence".
     *
     * @group dominoesPath_longInvalidSequence
     */
    public function testCanExecuteLongInvalidSequence(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - long invalid sequence.txt',
            "false" . PHP_EOL
        );
    }
}
