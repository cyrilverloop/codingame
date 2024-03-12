<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\MondayTuesdayHappyDays;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\MondayTuesdayHappyDays\MondayTuesdayHappyDays;

/**
 * Tests for the "Monday tuesday happy days" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\MondayTuesdayHappyDays\MondayTuesdayHappyDays
 * @group mondayTuesdayHappyDays
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new MondayTuesdayHappyDays();
    }

    /**
     * Test that the code can be executed for "Tomorrow".
     *
     * @group mondayTuesdayHappyDays_tomorrow
     */
    public function testCanExecuteTomorrow(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - tomorrow.txt',
            "Tuesday" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Sometime next month".
     *
     * @group mondayTuesdayHappyDays_sometimeNextMonth
     */
    public function testCanExecuteSometimeNextMonth(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - sometime next month.txt',
            "Sunday" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Sometime next month, leap year".
     *
     * @group mondayTuesdayHappyDays_sometimeNextMonthLeapYear
     */
    public function testCanExecuteSometimeNextMonthLeapYear(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - sometime next month, leap year.txt',
            "Monday" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "When was that again?".
     *
     * @group mondayTuesdayHappyDays_whenWasThatAgain
     */
    public function testCanExecuteWhenWasThatAgain(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - when was that again?.txt',
            "Wednesday" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Future".
     *
     * @group mondayTuesdayHappyDays_future
     */
    public function testCanExecuteFuture(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - future.txt',
            "Friday" . PHP_EOL
        );
    }
}
