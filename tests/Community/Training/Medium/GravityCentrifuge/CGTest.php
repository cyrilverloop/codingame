<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\GravityCentrifuge;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Medium\GravityCentrifuge\GravityCentrifuge;

/**
 * Tests for the "Gravity centrifuge" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\GravityCentrifuge\GravityCentrifuge
 * @group gravityCentrifuge
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new GravityCentrifuge();
    }

    /**
     * Test that the code can be executed for "Tumble".
     *
     * @group gravityCentrifugeTuning_tumble
     */
    public function testCanExecuteTumble(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - tumble.txt',
            file_get_contents(__DIR__ . '/output/01 - tumble.txt')
        );
    }

    /**
     * Test that the code can be executed for "Double tumble".
     *
     * @group gravityCentrifugeTuning_doubleTumble
     */
    public function testCanExecuteDoubleTumble(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - double tumble.txt',
            file_get_contents(__DIR__ . '/output/02 - double tumble.txt')
        );
    }

    /**
     * Test that the code can be executed for "Triple tumble".
     *
     * @group gravityCentrifugeTuning_tripleTumble
     */
    public function testCanExecuteTripleTumble(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - triple tumble.txt',
            file_get_contents(__DIR__ . '/output/03 - triple tumble.txt')
        );
    }

    /**
     * Test that the code can be executed for "Octal, remember?".
     *
     * @group gravityCentrifugeTuning_octalRemember
     */
    public function testCanExecuteOctalRemember(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - octal, remember?.txt',
            file_get_contents(__DIR__ . '/output/04 - octal, remember?.txt')
        );
    }

    /**
     * Test that the code can be executed for "Dead beef!".
     *
     * @group gravityCentrifugeTuning_deadBeef
     */
    public function testCanExecuteDeadBeef(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - dead beef!.txt',
            file_get_contents(__DIR__ . '/output/05 - dead beef!.txt')
        );
    }

    /**
     * Test that the code can be executed for "Wait, what?".
     *
     * @group gravityCentrifugeTuning_waitWhat
     */
    public function testCanExecuteWaitWhat(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - wait, what?.txt',
            file_get_contents(__DIR__ . '/output/06 - wait, what?.txt')
        );
    }

    /**
     * Test that the code can be executed for "Leonardo would be proud of you!".
     *
     * @group gravityCentrifugeTuning_leonardoWouldBeProudOfYou
     */
    public function testCanExecuteLeonardoWouldBeProudOfYou(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - leonardo would be proud of you!.txt',
            file_get_contents(__DIR__ . '/output/07 - leonardo would be proud of you!.txt')
        );
    }

    /**
     * Test that the code can be executed for "Randomize this! 1".
     *
     * @group gravityCentrifugeTuning_randomizeThis1
     */
    public function testCanExecuteRandomizeThis1(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - randomize this! 1.txt',
            file_get_contents(__DIR__ . '/output/08 - randomize this! 1.txt')
        );
    }

    /**
     * Test that the code can be executed for "Randomize this! 2".
     *
     * @group gravityCentrifugeTuning_randomizeThis2
     */
    public function testCanExecuteRandomizeThis2(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/09 - randomize this! 2.txt',
            file_get_contents(__DIR__ . '/output/09 - randomize this! 2.txt')
        );
    }

    /**
     * Test that the code can be executed for "Randomize this! 3".
     *
     * @group gravityCentrifugeTuning_randomizeThis3
     */
    public function testCanExecuteRandomizeThis3(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/10 - randomize this! 3.txt',
            file_get_contents(__DIR__ . '/output/10 - randomize this! 3.txt')
        );
    }

    /**
     * Test that the code can be executed for "Binary overflow".
     *
     * @group gravityCentrifugeTuning_binaryOverflow
     */
    public function testCanExecuteBinaryOverflow(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/11 - binary overflow.txt',
            file_get_contents(__DIR__ . '/output/11 - binary overflow.txt')
        );
    }
}
