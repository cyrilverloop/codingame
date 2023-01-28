<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\VoteCounting;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Medium\VoteCounting\VoteCounting;

/**
 * Tests for the "Vote counting" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\VoteCounting\VoteCounting
 * @group voteCounting
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new VoteCounting();
    }

    /**
     * Test that the code can be executed for "Example".
     *
     * @group voteCounting_example
     */
    public function testCanExecuteExample(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - example.txt',
            "2 1" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Invalid voter".
     *
     * @group voteCounting_invalidVoter
     */
    public function testCanExecuteInvalidVoter(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - invalid voter.txt',
            "1 2" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Too many votes".
     *
     * @group voteCounting_tooManyVotes
     */
    public function testCanExecuteTooManyVotes(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - too many votes.txt',
            "1 3" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Maybe vote".
     *
     * @group voteCounting_maybeVote
     */
    public function testCanExecuteMaybeVote(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - maybe vote.txt',
            "1 0" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Complex".
     *
     * @group voteCounting_complex
     */
    public function testCanExecuteComplex(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - complex.txt',
            "2 1" . PHP_EOL
        );
    }
}
