<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\DeFizzBuzzer;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\DeFizzBuzzer\DeFizzBuzzer;

/**
 * Tests for the "De-FizzBuzzer" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\DeFizzBuzzer\DeFizzBuzzer
 * @group deFizzBuzzer
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new DeFizzBuzzer();
    }

    /**
     * Test that the code can be executed for "Plain number".
     *
     * @group deFizzBuzzer_plainNumber
     */
    public function testCanExecutePlainNumber(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - plain number.txt',
            file_get_contents(__DIR__ . '/output/01 - plain number.txt')
        );
    }

    /**
     * Test that the code can be executed for "Two simple ones".
     *
     * @group deFizzBuzzer_twoSimpleOnes
     */
    public function testCanExecuteTwoSimpleOnes(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - two simple ones.txt',
            file_get_contents(__DIR__ . '/output/02 - two simple ones.txt')
        );
    }

    /**
     * Test that the code can be executed for "More words".
     *
     * @group deFizzBuzzer_moreWords
     */
    public function testCanExecuteMoreWords(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - more words.txt',
            file_get_contents(__DIR__ . '/output/03 - more words.txt')
        );
    }

    /**
     * Test that the code can be executed for "Error cases".
     *
     * @group deFizzBuzzer_errorCases
     */
    public function testCanExecuteErrorCases(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - error cases.txt',
            file_get_contents(__DIR__ . '/output/04 - error cases.txt')
        );
    }

    /**
     * Test that the code can be executed for "Lots of cases".
     *
     * @group deFizzBuzzer_lotsOfCases
     */
    public function testCanExecuteLotsOfCases(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - lots of cases.txt',
            file_get_contents(__DIR__ . '/output/05 - lots of cases.txt')
        );
    }
}
