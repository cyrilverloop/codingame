<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\VanEcksSequence;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Easy\VanEcksSequence\VanEcksSequence;

/**
 * Tests for the "Van Eck's sequence" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\VanEcksSequence\VanEcksSequence
 * @group vanEcksSequence
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new VanEcksSequence();
    }

    /**
     * Test that the code can be executed for "Not Seen".
     *
     * @group vanEcksSequence_notSeen
     */
    public function testCanExecuteNotSeen(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - not seen.txt',
            0 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Seen Before".
     *
     * @group vanEcksSequence_seenBefore
     */
    public function testCanExecuteSeenBefore(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - seen before.txt',
            1 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "A little long".
     *
     * @group vanEcksSequence_aLittleLong
     */
    public function testCanExecuteALittleLong(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - a little long.txt',
            11 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Longer".
     *
     * @group vanEcksSequence_Longer
     */
    public function testCanExecuteLonger(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - longer.txt',
            7 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "A little stress".
     *
     * @group vanEcksSequence_aLittleStress
     */
    public function testCanExecuteALittleStress(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - a little stress.txt',
            29 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Stress Check".
     *
     * @group vanEcksSequence_stressCheck
     */
    public function testCanExecuteStressCheck(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - stress check.txt',
            34143 . PHP_EOL
        );
    }
}
