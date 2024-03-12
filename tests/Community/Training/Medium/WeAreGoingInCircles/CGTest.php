<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\WeAreGoingInCircles;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\WeAreGoingInCircles\WeAreGoingInCircles;

/**
 * Tests for the "We're going in circles!" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\WeAreGoingInCircles\WeAreGoingInCircles
 * @group weAreGoingInCircles
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new WeAreGoingInCircles();
    }

    /**
     * Test that the code can be executed for "A simple loop".
     *
     * @group weAreGoingInCircles_aSimpleLoop
     */
    public function testCanExecuteASimpleLoop(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - a simple loop.txt',
            1 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Not a loop".
     *
     * @group weAreGoingInCircles_notALoop
     */
    public function testCanExecuteNotALoop(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - not a loop.txt',
            0 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Still not a loop".
     *
     * @group weAreGoingInCircles_stillNotALoop
     */
    public function testCanExecuteStillNotALoop(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - still not a loop.txt',
            0 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Overlapping loops".
     *
     * @group weAreGoingInCircles_overlappingLoops
     */
    public function testCanExecuteOverlappingLoops(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - overlapping loops.txt',
            3 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Mad face >.<".
     *
     * @group weAreGoingInCircles_madFace
     */
    public function testCanExecuteMadFace(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - mad face >.<.txt',
            5 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Wall of text".
     *
     * @group weAreGoingInCircles_wallOfText
     */
    public function testCanExecuteWallOfText(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - wall of text.txt',
            0 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Multiple inputs".
     *
     * @group weAreGoingInCircles_multipleInputs
     */
    public function testCanExecuteMultipleInputs(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - multiple inputs.txt',
            1 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Gobbledygook".
     *
     * @group weAreGoingInCircles_gobbledygook
     */
    public function testCanExecuteGobbledygook(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - gobbledygook.txt',
            7 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "More goobledygook".
     *
     * @group weAreGoingInCircles_moreGoobledygook
     */
    public function testCanExecuteMoreGoobledygook(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/09 - more goobledygook.txt',
            1 . PHP_EOL
        );
    }
}
