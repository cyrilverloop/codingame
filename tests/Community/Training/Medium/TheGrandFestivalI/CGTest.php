<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\TheGrandFestivalI;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\TheGrandFestivalI\TheGrandFestivalI;

/**
 * Tests for the "The grand festival - I" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\TheGrandFestivalI\TheGrandFestivalI
 * @group theGrandFestivalI
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new TheGrandFestivalI();
    }

    /**
     * Test that the code can be executed for "1 week".
     *
     * @group theGrandFestivalI_1Week
     */
    public function testCanExecute1Week(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - 1 week.txt',
            169 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "2 weeks".
     *
     * @group theGrandFestivalI_2Weeks
     */
    public function testCanExecute2Weeks(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - 2 weeks.txt',
            399 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "No rest".
     *
     * @group theGrandFestivalI_noRest
     */
    public function testCanExecuteNoRest(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - no rest.txt',
            292 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Fatigued".
     *
     * @group theGrandFestivalI_fatigued
     */
    public function testCanExecuteFatigued(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - fatigued.txt',
            61 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Long tour".
     *
     * @group theGrandFestivalI_longTour
     */
    public function testCanExecuteLongTour(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - long tour.txt',
            233 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Longer tour".
     *
     * @group theGrandFestivalI_longerTour
     */
    public function testCanExecuteLongerTour(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - longer tour.txt',
            1213 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "70 days!".
     *
     * @group theGrandFestivalI_70Days
     */
    public function testCanExecute70Days(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - 70 days!.txt',
            1727 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Centurion".
     *
     * @group theGrandFestivalI_centurion
     */
    public function testCanExecuteCenturion(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - centurion.txt',
            2332 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Year Long".
     *
     * @group theGrandFestivalI_yearLong
     */
    public function testCanExecuteYearLong(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/09 - year long.txt',
            8826 . PHP_EOL
        );
    }
}
