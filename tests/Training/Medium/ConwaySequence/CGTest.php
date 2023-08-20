<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Training\Medium\ConwaySequence;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Training\Medium\ConwaySequence\ConwaySequence;

/**
 * Tests for the "Conway sequence" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Training\Medium\ConwaySequence\ConwaySequence
 * @group conwaySequence
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new ConwaySequence();
    }

    /**
     * Test that the code can be executed for "R=1 and L=11".
     *
     * @group conwaySequence_r1l11
     */
    public function testCanExecuteR1L11(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - r1 l11.txt',
            file_get_contents(__DIR__ . '/output/01 - r1 l11.txt')
        );
    }

    /**
     * Test that the code can be executed for "R=2 and L=1".
     *
     * @group conwaySequence_r2l1
     */
    public function testCanExecuteR2L1(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - r2 l1.txt',
            file_get_contents(__DIR__ . '/output/02 - r2 l1.txt')
        );
    }

    /**
     * Test that the code can be executed for "R=5 and L=10".
     *
     * @group conwaySequence_r5l10
     */
    public function testCanExecuteR5L10(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - r5 l10.txt',
            file_get_contents(__DIR__ . '/output/03 - r5 l10.txt')
        );
    }

    /**
     * Test that the code can be executed for "R=25 and L=10".
     *
     * @group conwaySequence_r25l10
     */
    public function testCanExecuteR25L10(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - r25 l10.txt',
            file_get_contents(__DIR__ . '/output/04 - r25 l10.txt')
        );
    }

    /**
     * Test that the code can be executed for "R=1 and L=25".
     *
     * @group conwaySequence_r1l25
     */
    public function testCanExecuteR1L25(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - r1 l25.txt',
            file_get_contents(__DIR__ . '/output/05 - r1 l25.txt')
        );
    }

    /**
     * Test that the code can be executed for "R=33 and L=25".
     *
     * @group conwaySequence_r33l25
     */
    public function testCanExecuteR33L25(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - r33 l25.txt',
            file_get_contents(__DIR__ . '/output/06 - r33 l25.txt')
        );
    }
}
