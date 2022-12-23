<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\SolidInteger;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Medium\SolidInteger\SolidInteger;

/**
 * Tests for the "Solid integer" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\SolidInteger\SolidInteger
 * @group solidInteger
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new SolidInteger();
    }

    /**
     * Test that the code can be executed for "Starting small".
     *
     * @group solidInteger_startingSmall
     */
    public function testCanExecuteStartingSmall(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - starting small.txt',
            11 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Medium test".
     *
     * @group solidInteger_mediumTest
     */
    public function testCanExecuteMediumTest(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - medium test.txt',
            121 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "100k".
     *
     * @group solidInteger_100k
     */
    public function testCanExecute100k(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - 100k.txt',
            162151 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Smart solution".
     *
     * @group solidInteger_smartSolution
     */
    public function testCanExecuteSmartSolution(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - smart solution.txt',
            23776826742147167 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Output might overflow".
     *
     * @group solidInteger_outputMightOverflow
     */
    public function testCanExecuteOutputMightOverflow(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - output might overflow.txt',
            33646585979948395414 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Single digit".
     *
     * @group solidInteger_singleDigit
     */
    public function testCanExecuteSingleDigit(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - single digit.txt',
            9 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Another small".
     *
     * @group solidInteger_anotherSmall
     */
    public function testCanExecuteAnotherSmall(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - another small.txt',
            98 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Another medium".
     *
     * @group solidInteger_anotherMedium
     */
    public function testCanExecuteAnotherMedium(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - another medium.txt',
            919 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Another large".
     *
     * @group solidInteger_anotherLarge
     */
    public function testCanExecuteAnotherLarge(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/09 - another large.txt',
            888889 . PHP_EOL
        );
    }
}
