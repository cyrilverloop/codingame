<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\GravityCentrifugeTuning;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\GravityCentrifugeTuning\GravityCentrifugeTuning;

/**
 * Tests for the "Gravity centrifuge tuning" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\GravityCentrifugeTuning\GravityCentrifugeTuning
 * @group gravityCentrifugeTuning
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new GravityCentrifugeTuning();
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
            "1" . PHP_EOL
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
            "2" . PHP_EOL
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
            "4" . PHP_EOL
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
            "21" . PHP_EOL
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
            "1102000022051000" . PHP_EOL
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
            "0" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Ramp it up! 1".
     *
     * @group gravityCentrifugeTuning_rampItUp1
     */
    public function testCanExecuteRampItUp1(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - ramp it up! 1.txt',
            "24000252252242" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Ramp it up! 2".
     *
     * @group gravityCentrifugeTuning_rampItUp2
     */
    public function testCanExecuteRampItUp2(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - ramp it up! 2.txt',
            "10112520124222245" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Ramp it up! 3".
     *
     * @group gravityCentrifugeTuning_rampItUp3
     */
    public function testCanExecuteRampItUp3(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/09 - ramp it up! 3.txt',
            "5040251045220204524" . PHP_EOL
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
            __DIR__ . '/input/10 - binary overflow.txt',
            "10404120421225002512504412044244" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Zeckendorf would be proud of you!".
     *
     * @group gravityCentrifugeTuning_ZeckendorfWouldBeProudOfYou
     */
    public function testCanExecuteZeckendorfWouldBeProudOfYou(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/11 - Zeckendorf would be proud of you!.txt',
            file_get_contents(__DIR__ . '/output/11 - Zeckendorf would be proud of you!.txt')
        );
    }
}
