<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests;

use PHPUnit\Framework\TestCase;

/**
 * @coversDefaultClass \CyrilVerloop\Codingame\Training\Easy\HorseRacingDuals\HorseRacingDuals
 */
abstract class PuzzleTest extends TestCase
{
    // Properties :

    /**
     * @var \CyrilVerloop\Codingame\Puzzle the puzzle.
     */
    protected $puzzle;


    // Methods :

    /**
     * Expects execute to output answer.
     */
    protected function expectExecuteOutputAnswer(string $filename, string $expectedAnswer): void
    {
        $stdin = fopen($filename, 'r');

        $this->expectOutputString($expectedAnswer);

        $this->puzzle->execute($stdin);
    }
}
