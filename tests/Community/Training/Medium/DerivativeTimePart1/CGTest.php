<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\DerivativeTimePart1;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Medium\DerivativeTimePart1\DerivativeTimePart1;

/**
 * Tests for the "Derivative time !!! - part1" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\DerivativeTimePart1\DerivativeTimePart1
 * @group derivativeTimePart1
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new DerivativeTimePart1();
    }

    /**
     * Test that the code can be executed for "Easy multiply".
     *
     * @group derivativeTimePart1_easyMultiply
     */
    public function testCanExecuteEasyMultiply(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - easy multiply.txt',
            30 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Second derivative".
     *
     * @group derivativeTimePart1_secondDerivative
     */
    public function testCanExecuteSecondDerivative(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - second derivative.txt',
            8640 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Second derivative mix".
     *
     * @group derivativeTimePart1_secondDerivativeMix
     */
    public function testCanExecuteSecondDerivativeMix(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - second derivative mix.txt',
            60 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Power with number".
     *
     * @group derivativeTimePart1_powerWithNumber
     */
    public function testCanExecutePowerWithNumber(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - power with number.txt',
            11 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Power with variable".
     *
     * @group derivativeTimePart1_powerWithVariable
     */
    public function testCanExecutePowerWithVariable(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - power with variable.txt',
            2 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "3 variables".
     *
     * @group derivativeTimePart1_3Variables
     */
    public function testCanExecute3Variables(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - 3 variables.txt',
            2561 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Fraction".
     *
     * @group derivativeTimePart1_fraction
     */
    public function testCanExecuteFraction(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - fraction.txt',
            4 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Longer multiply".
     *
     * @group derivativeTimePart1_longerMultiply
     */
    public function testCanExecuteLongerMultiply(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - longer multiply.txt',
            32 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "3rd derivative".
     *
     * @group derivativeTimePart1_3rdDerivative
     */
    public function testCanExecute3rdDerivative(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/09 - 3rd derivative.txt',
            16320 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Some Greek ;)".
     *
     * @group derivativeTimePart1_someGreek
     */
    public function testCanExecuteSomeGreek(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/10 - some Greek ;).txt',
            16320 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Maybe not xyz ;)".
     *
     * @group derivativeTimePart1_maybeNotXYZ
     */
    public function testCanExecuteMaybeNotXYZ(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/11 - maybe not xyz ;).txt',
            16320 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Some Vars ;)))".
     *
     * @group derivativeTimePart1_someVars
     */
    public function testCanExecuteSomeVars(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/12 - some vars ;))).txt',
            16320 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Bigger constants".
     *
     * @group derivativeTimePart1_biggerConstants
     */
    public function testCanExecuteBiggerConstants(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/13 - bigger constants.txt',
            78000 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Bigger power".
     *
     * @group derivativeTimePart1_biggerPower
     */
    public function testCanExecuteBiggerPower(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/14 - bigger power.txt',
            1047552 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Cannot find".
     *
     * @group derivativeTimePart1_cannotFind
     */
    public function testCanExecuteCannotFind(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/15 - cannot find.txt',
            0 . PHP_EOL
        );
    }
}
