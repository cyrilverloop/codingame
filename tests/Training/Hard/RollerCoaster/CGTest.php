<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Training\Hard\RollerCoaster;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Training\Hard\RollerCoaster\RollerCoaster;

/**
 * Tests for the "RollerCoaster" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Training\Hard\RollerCoaster\RollerCoaster
 * @group rollerCoaster
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new RollerCoaster();
    }

    /**
     * Test that the code can be executed for "Simple case".
     *
     * @group rollerCoaster_simpleCase
     */
    public function testCanExecuteSimpleCase(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - simple case.txt',
            7 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "1000 groups of a few people".
     *
     * @group rollerCoaster_1000GroupsOfAFewPeople
     */
    public function testCanExecute1000GroupsOfAFewPeople(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - 1000 groups of a few people.txt',
            3935 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "The same groups go on the ride several times during the day".
     *
     * @group rollerCoaster_theSameGroupsGoOnTheRideSeveralTimesDuringTheDay
     */
    public function testCanExecuteTheSameGroupsGoOnTheRideSeveralTimesDuringTheDay(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - the same groups go on the ride several times during the day.txt',
            15 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "All the people get on the roller coaster at least once".
     *
     * @group rollerCoaster_allThePeopleGetOnTheRollerCoasterAtLeastOnce
     */
    public function testCanExecuteAllThePeopleGetOnTheRollerCoasterAtLeastOnce(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - all the people get on the roller coaster at least once.txt',
            15000 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "High earnings during the day (> 2^32)".
     *
     * @group rollerCoaster_highEarningsduringTheDay
     */
    public function testCanExecuteHighEarningsduringTheDay(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - high earnings during the day.txt',
            4999975000 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Works with a large dataset".
     *
     * @group rollerCoaster_worksWithALargeDataset
     */
    public function testCanExecuteWorksWithALargeDataset(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - works with a large dataset.txt',
            89744892565569 . PHP_EOL
        );
    }
}
