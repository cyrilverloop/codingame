<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\TheGrandFestivalII;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Medium\TheGrandFestivalII\TheGrandFestivalII;

/**
 * Tests for the "The grand festival - II" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\TheGrandFestivalII\TheGrandFestivalII
 * @group theGrandFestivalII
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new TheGrandFestivalII();
    }

    /**
     * Test that the code can be executed for "Easy".
     *
     * @group theGrandFestivalII_easy
     */
    public function testCanExecuteEasy(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - easy.txt',
            "1>2>3>5>6>7" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "2 weeks".
     *
     * @group theGrandFestivalII_2Weeks
     */
    public function testCanExecute2Weeks(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - 2 weeks.txt',
            "1>2>3>4>6>8>9>10>11>13>14" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "No rest".
     *
     * @group theGrandFestivalII_noRest
     */
    public function testCanExecuteNoRest(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - no rest.txt',
            "1>2>3>4>5>6>7>8>9>10" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Fatigued".
     *
     * @group theGrandFestivalII_fatigued
     */
    public function testCanExecuteFatigued(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - fatigued.txt',
            "1>2>4>5>7" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "1 year".
     *
     * @group theGrandFestivalII_1Year
     */
    public function testCanExecute1Year(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - 1 year.txt',
            file_get_contents(__DIR__ . '/output/05 - 1 year.txt')
        );
    }
}
