<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\HowTimeFlies;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\HowTimeFlies\HowTimeFlies;

/**
 * Tests for the "How time flies" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\HowTimeFlies\HowTimeFlies
 * @group howTimeFlies
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new HowTimeFlies();
    }

    /**
     * Test that the code can be executed for "Full years".
     *
     * @group howTimeFlies_fullYears
     */
    public function testCanExecuteFullYears(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - full years.txt',
            "16 years, total 5844 days" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Full months".
     *
     * @group howTimeFlies_fullMonths
     */
    public function testCanExecuteFullMonths(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - full months.txt',
            "7 months, total 213 days" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Years and months".
     *
     * @group howTimeFlies_yearsAndMonths
     */
    public function testCanExecuteYearsAndMonths(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - years and months.txt',
            "1 year, 3 months, total 458 days" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Days only".
     *
     * @group howTimeFlies_daysOnly
     */
    public function testCanExecuteDaysOnly(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - days only.txt',
            "total 30 days" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Same date".
     *
     * @group howTimeFlies_sameDate
     */
    public function testCanExecuteSameDate(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - same date.txt',
            "total 0 days" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Complex".
     *
     * @group howTimeFlies_complex
     */
    public function testCanExecuteComplex(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - complex.txt',
            "3 years, 1 month, total 1140 days" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "One month".
     *
     * @group howTimeFlies_oneMonth
     */
    public function testCanExecuteOneMonth(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - one month.txt',
            "1 month, total 31 days" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "One year".
     *
     * @group howTimeFlies_oneYear
     */
    public function testCanExecuteOneYear(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - one year.txt',
            "1 year, total 365 days" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Leap year".
     *
     * @group howTimeFlies_leapYear
     */
    public function testCanExecuteLeapYear(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/09 - leap year.txt',
            "1 year, total 366 days" . PHP_EOL
        );
    }
}
