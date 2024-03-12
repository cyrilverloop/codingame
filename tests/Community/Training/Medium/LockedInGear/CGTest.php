<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\LockedInGear;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\LockedInGear\LockedInGear;

/**
 * Tests for the "Locked in gear" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\LockedInGear\LockedInGear
 * @group lockedInGear
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new LockedInGear();
    }

    /**
     * Test that the code can be executed for "Example".
     *
     * @group lockedInGear_example
     */
    public function testCanExecuteExample(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - example.txt',
            "CCW" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "The missing link".
     *
     * @group lockedInGear_theMissingLink
     */
    public function testCanExecuteTheMissingLink(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - the missing link.txt',
            "NOT MOVING" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "A dead end".
     *
     * @group lockedInGear_aDeadEnd
     */
    public function testCanExecuteADeadEnd(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - a dead end.txt',
            "CCW" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Jammed".
     *
     * @group lockedInGear_jammed
     */
    public function testCanExecuteJammed(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - jammed.txt',
            "NOT MOVING" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "This problem is beyond me".
     *
     * @group lockedInGear_thisProblemIsBeyondMe
     */
    public function testCanExecuteThisProblemIsBeyondMe(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - this problem is beyond me.txt',
            "NOT MOVING" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Lots of gears".
     *
     * @group lockedInGear_lotsOfGears
     */
    public function testCanExecuteLotsOfGears(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - lots of gears.txt',
            "CW" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "An entire different problem altogether".
     *
     * @group lockedInGear_anEntireDifferentProblemAltogether
     */
    public function testCanExecuteAnEntireDifferentProblemAltogether(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - an entire different problem altogether.txt',
            "CCW" . PHP_EOL
        );
    }
}
