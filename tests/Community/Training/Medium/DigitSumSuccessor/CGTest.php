<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\DigitSumSuccessor;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\DigitSumSuccessor\DigitSumSuccessor;

/**
 * Tests for the "Digit sum successor" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\DigitSumSuccessor\DigitSumSuccessor
 * @group digitSumSuccessor
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new DigitSumSuccessor();
    }

    /**
     * Test that the code can be executed for "Two".
     *
     * @group divideTheFactorial_two
     */
    public function testCanExecuteTwo(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - two.txt',
            11 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Simple test".
     *
     * @group divideTheFactorial_simpleTest
     */
    public function testCanExecuteSimpleTest(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - simple test.txt',
            51 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Trailing zeros".
     *
     * @group divideTheFactorial_trailingZeros
     */
    public function testCanExecuteTrailingZeros(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - trailing zeros.txt',
            50001 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Trailing zeros and nines".
     *
     * @group divideTheFactorial_trailingZerosAndNines
     */
    public function testCanExecuteTrailingZerosAndNines(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - trailing zeros and nines.txt',
            43000899 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Need more length".
     *
     * @group divideTheFactorial_needMoreLength
     */
    public function testCanExecuteNeedMoreLength(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - need more length.txt',
            10000000006 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Random test".
     *
     * @group divideTheFactorial_randomTest
     */
    public function testCanExecuteRandomTest(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - random test.txt',
            1570175191 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Only nines".
     *
     * @group divideTheFactorial_onlyNines
     */
    public function testCanExecuteOnlyNines(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - only nines.txt',
            1899999999 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Zeros and nines".
     *
     * @group divideTheFactorial_zerosAndNines
     */
    public function testCanExecuteZerosAndNines(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - zeros and nines.txt',
            3700029999 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Zeros and nines 2".
     *
     * @group divideTheFactorial_zerosAndNines2
     */
    public function testCanExecuteZerosAndNines2(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/09 - zeros and nines 2.txt',
            10499 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Zeros and nines 3".
     *
     * @group divideTheFactorial_zerosAndNines3
     */
    public function testCanExecuteZerosAndNines3(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/10 - zeros and nines 3.txt',
            420018999 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Zeros and nines 4".
     *
     * @group divideTheFactorial_zerosAndNines4
     */
    public function testCanExecuteZerosAndNines4(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/11 - zeros and nines 4.txt',
            420068999 . PHP_EOL
        );
    }
}
