<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\BenfordsLaw;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\BenfordsLaw\BenfordsLaw;

/**
 * Tests for the "Benford's law" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\BenfordsLaw\BenfordsLaw
 * @group benfordsLaw
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new BenfordsLaw();
    }

    /**
     * Test that the code can be executed for "Regular account".
     *
     * @group benfordsLaw_regularAccount
     */
    public function testCanExecuteRegularAccount(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - regular account.txt',
            "false" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Fake account (lot's of numbers starting with 1)".
     *
     * @group benfordsLaw_fakeAccount
     */
    public function testCanExecuteFakeAccount(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - fake account.txt',
            "true" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Fake account (equidistributed)".
     *
     * @group benfordsLaw_fakeAccountEquidistributed
     */
    public function testCanExecuteFakeAccountEquidistributed(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - fake account (equidistributed).txt',
            "true" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Adjusted account".
     *
     * @group benfordsLaw_adjustedAccount
     */
    public function testCanExecuteAdjustedAccount(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - adjusted account.txt',
            "true" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Regular, less transactions".
     *
     * @group benfordsLaw_regularLessTransactions
     */
    public function testCanExecuteRegularLessTransactions(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - regular less transactions.txt',
            "false" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Fake account (equidistributed)".
     *
     * @group benfordsLaw_fakeAccountEquidistributed2
     */
    public function testCanExecuteFakeAccountEquidistributed2(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - fake account (equidistributed).txt',
            "true" . PHP_EOL
        );
    }
}
