<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests;

use PHPUnit\Framework\TestCase;
use SebastianBergmann\Invoker\Invoker;

/**
 * Base class for testing puzzles.
 */
abstract class PuzzleTest extends TestCase
{
    // Constants :

    /**
     * @var int the time limit in seconds.
     */
    const TIME_LIMIT = 6;


    // Properties :

    /** @var \CyrilVerloop\Codingame\Puzzle the puzzle. */
    protected $puzzle;


    // Methods :

    /**
     * Expects `execute()` to output answer.
     * @param string $filename the file name.
     * @param string $expectedAnswer the expected answer.
     */
    protected function expectExecuteOutputAnswer(string $filename, string $expectedAnswer): void
    {
        $stdin = fopen($filename, 'r');

        $this->expectOutputString($expectedAnswer);

        $invoker = new Invoker();
        $invoker->invoke([$this->puzzle, "execute"], [$stdin], self::TIME_LIMIT);
    }
}
