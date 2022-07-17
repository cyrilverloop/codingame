<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\TrickyNumberVerifier;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Easy\TrickyNumberVerifier\TrickyNumberVerifier;

/**
 * Tests for the "Tricky number verifier" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\TrickyNumberVerifier\TrickyNumberVerifier
 * @group trickyNumberVerifier
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new TrickyNumberVerifier();
    }

    /**
     * Test that the code can be executed for "Valid numbers".
     *
     * @group trickyNumberVerifier_validNumbers
     */
    public function testCanExecuteValidNumbers(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - valid numbers.txt',
            file_get_contents(__DIR__ . '/output/01 - valid numbers.txt')
        );
    }

    /**
     * Test that the code can be executed for "Syntax errors".
     *
     * @group trickyNumberVerifier_syntaxErrors
     */
    public function testCanExecuteSyntaxErrors(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - syntax errors.txt',
            file_get_contents(__DIR__ . '/output/02 - syntax errors.txt')
        );
    }

    /**
     * Test that the code can be executed for "Invalid dates".
     *
     * @group trickyNumberVerifier_invalidDates
     */
    public function testCanExecuteInvalidDates(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - invalid dates.txt',
            file_get_contents(__DIR__ . '/output/03 - invalid dates.txt')
        );
    }

    /**
     * Test that the code can be executed for "29th February".
     *
     * @group trickyNumberVerifier_29thFebruary
     */
    public function testCanExecute29thFebruary(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - 29th february.txt',
            file_get_contents(__DIR__ . '/output/04 - 29th february.txt')
        );
    }

    /**
     * Test that the code can be executed for "10 consecutive numbers".
     *
     * @group trickyNumberVerifier_10ConsecutiveNumbers
     */
    public function testCanExecute10ConsecutiveNumbers(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - 10 consecutive numbers.txt',
            file_get_contents(__DIR__ . '/output/05 - 10 consecutive numbers.txt')
        );
    }

    /**
     * Test that the code can be executed for "Rejected identifier".
     *
     * @group trickyNumberVerifier_rejectedIdentifier
     */
    public function testCanExecuteRejectedIdentifier(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - rejected identifier.txt',
            file_get_contents(__DIR__ . '/output/06 - rejected identifier.txt')
        );
    }
}
