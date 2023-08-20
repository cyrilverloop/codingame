<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Training\Medium\TelephoneNumbers;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Training\Medium\TelephoneNumbers\TelephoneNumbers;

/**
 * Tests for the "Telephone numbers" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Training\Medium\TelephoneNumbers\TelephoneNumbers
 * @group telephoneNumbers
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new TelephoneNumbers();
    }

    /**
     * Test that the code can be executed for "A telephone number".
     *
     * @group telephoneNumbers_aTelephoneNumber
     */
    public function testCanExecuteATelephoneNumber(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - a telephone number.txt',
            10 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Numbers with a different base".
     *
     * @group telephoneNumbers_numbersWithADifferentBase
     */
    public function testCanExecuteNumbersWithADifferentBase(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - numbers with a different base.txt',
            20 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Number included in another".
     *
     * @group telephoneNumbers_numberIncludedInAnother
     */
    public function testCanExecuteNumberIncludedInAnother(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - number included in another.txt',
            10 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Numbers with a common part".
     *
     * @group telephoneNumbers_numbersWithACommonPart
     */
    public function testCanExecuteNumbersWithACommonPart(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - numbers with a common part.txt',
            28 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Long list of numbers".
     *
     * @group telephoneNumbers_longListOfNumbers
     */
    public function testCanExecuteLongListOfNumbers(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - long list of numbers.txt',
            45512 . PHP_EOL
        );
    }
}
