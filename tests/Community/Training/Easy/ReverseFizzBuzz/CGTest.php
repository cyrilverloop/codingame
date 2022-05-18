<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\ReverseFizzBuzz;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Easy\ReverseFizzBuzz\ReverseFizzBuzz;

/**
 * Tests for the "Reverse FizzBuzz" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\ReverseFizzBuzz\ReverseFizzBuzz
 * @group reverseFizzBuzz
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new ReverseFizzBuzz();
    }

    /**
     * Test that the code can be executed for "Sample".
     *
     * @group reverseFizzBuzz_sample
     */
    public function testCanExecuteSample(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - sample.txt',
            "3 5" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Everything is a Fizz".
     *
     * @group reverseFizzBuzz_everythingIsAFizz
     */
    public function testCanExecuteEverythingIsAFizz(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - everything is a Fizz.txt',
            "1 5" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Fizz is Buzz".
     *
     * @group reverseFizzBuzz_fizzIsBuzz
     */
    public function testCanExecuteFizzIsBuzz(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - Fizz is Buzz.txt',
            "5 5" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "One Fizz to rule them all".
     *
     * @group reverseFizzBuzz_oneFizzToRuleThemAll
     */
    public function testCanExecuteOneFizzToRuleThemAll(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - one Fizz to rule them all.txt',
            "30 9" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Tricky".
     *
     * @group reverseFizzBuzz_tricky
     */
    public function testCanExecuteTricky(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - tricky.txt',
            "5 51" . PHP_EOL
        );
    }
}
