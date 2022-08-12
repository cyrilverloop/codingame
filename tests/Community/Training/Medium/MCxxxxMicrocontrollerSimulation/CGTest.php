<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\MCxxxxMicrocontrollerSimulation;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Medium\MCxxxxMicrocontrollerSimulation\MCxxxxMicrocontrollerSimulation;

/**
 * Tests for the "MCxxxx microcontroller simulation" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\MCxxxxMicrocontrollerSimulation\MCxxxxMicrocontrollerSimulation
 * @group MCxxxxMicrocontrollerSimulation
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new MCxxxxMicrocontrollerSimulation();
    }

    /**
     * Test that the code can be executed for "Simple I/O".
     *
     * @group MCxxxxMicrocontrollerSimulation_simpleIO
     */
    public function testCanExecuteSimpleIO(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - simple IO.txt',
            "2" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Double I/O".
     *
     * @group MCxxxxMicrocontrollerSimulation_doubleIO
     */
    public function testCanExecuteDoubleIO(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - double IO.txt',
            "1 2" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Buffering with dat & acc".
     *
     * @group MCxxxxMicrocontrollerSimulation_bufferingWithDatAndAcc
     */
    public function testCanExecuteBufferingWithDatAndAcc(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - buffering with dat & acc.txt',
            "2 1" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "First grade arithmetics".
     *
     * @group MCxxxxMicrocontrollerSimulation_firstGradeArithmetics
     */
    public function testCanExecuteFirstGradeArithmetics(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - first grade arithmetics.txt',
            "7 1" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Third grade arithmetics".
     *
     * @group MCxxxxMicrocontrollerSimulation_thirdGradeArithmetics
     */
    public function testCanExecuteThirdGradeArithmetics(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - third grade arithmetics.txt',
            "35" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "NOT what you think".
     *
     * @group MCxxxxMicrocontrollerSimulation_NOTWhatYouThink
     */
    public function testCanExecuteNOTWhatYouThink(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - NOT what you think.txt',
            "100 0 0 0" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Labels, jumps and unnecessary text".
     *
     * @group MCxxxxMicrocontrollerSimulation_labelsJumpsAndUnnecessaryText
     */
    public function testCanExecuteLabelsJumpsAndUnnecessaryText(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - labels, jumps and unnecessary text.txt',
            "4" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "One last time".
     *
     * @group MCxxxxMicrocontrollerSimulation_oneLastTime
     */
    public function testCanExecuteOneLastTime(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - one last time.txt',
            "0" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "What the heck ?".
     *
     * @group MCxxxxMicrocontrollerSimulation_whatTheHeck
     */
    public function testCanExecuteWhatTheHeck(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/09 - what the heck ?.txt',
            "1" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Overflow !!!".
     *
     * @group MCxxxxMicrocontrollerSimulation_overflow
     */
    public function testCanExecuteOverflow(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/10 - overflow !!!.txt',
            "-999 999 999" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Conditional execution I".
     *
     * @group MCxxxxMicrocontrollerSimulation_conditionalExecutionI
     */
    public function testCanExecuteConditionalExecutionI(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/11 - conditional execution I.txt',
            "-1" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Conditional execution II".
     *
     * @group MCxxxxMicrocontrollerSimulation_conditionalExecutionII
     */
    public function testCanExecuteConditionalExecutionII(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/12 - conditional execution II.txt',
            "1 1" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Conditional execution III".
     *
     * @group MCxxxxMicrocontrollerSimulation_conditionalExecutionIII
     */
    public function testCanExecuteConditionalExecutionIII(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/13 - conditional execution III.txt',
            "1 -1" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Digit manipulation I".
     *
     * @group MCxxxxMicrocontrollerSimulation_digitManipulationI
     */
    public function testCanExecuteDigitManipulationI(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/14 - digit manipulation I.txt',
            "3 2 1 0" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Digit manipulation II".
     *
     * @group MCxxxxMicrocontrollerSimulation_digitManipulationII
     */
    public function testCanExecuteDigitManipulationII(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/15 - digit manipulation II.txt',
            "999 900" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Concrete example".
     *
     * @group MCxxxxMicrocontrollerSimulation_concreteExample
     */
    public function testCanExecuteConcreteExample(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/16 - concrete example.txt',
            "1 2 4 8 16 32 64 128 256 512" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "JUMP JUMP JUMP !!!".
     *
     * @group MCxxxxMicrocontrollerSimulation_JUMPJUMPJUMP
     */
    public function testCanExecuteConcreteJUMPJUMPJUMP(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/17 - JUMP JUMP JUMP !!!.txt',
            "1 2 3 4 5 6" . PHP_EOL
        );
    }
}
