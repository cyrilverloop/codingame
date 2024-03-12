<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\NumberDerivation;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\NumberDerivation\NumberDerivation;

/**
 * Tests for the "Number derivation" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\NumberDerivation\NumberDerivation
 * @group numberDerivation
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new NumberDerivation();
    }

    /**
     * Test that the code can be executed for "Prime number".
     *
     * @group numberDerivation_primeNumber
     */
    public function testCanExecutePrimeNumber(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - prime number.txt',
            1 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Power of prime".
     *
     * @group numberDerivation_powerOfPrime
     */
    public function testCanExecutePowerOfPrime(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - power of prime.txt',
            108 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Product of primes".
     *
     * @group numberDerivation_productOfPrimes
     */
    public function testCanExecuteProductOfPrimes(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - product of primes.txt',
            8 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Integer".
     *
     * @group numberDerivation_integer
     */
    public function testCanExecuteInteger(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - integer.txt',
            41 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "n’=n".
     *
     * @group numberDerivation_nn
     */
    public function testCanExecuteNN(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - n’=n.txt',
            27 . PHP_EOL
        );
    }
}
