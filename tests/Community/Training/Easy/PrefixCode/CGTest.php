<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\PrefixCode;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\PrefixCode\PrefixCode;

/**
 * Tests for the "Prefix code" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\PrefixCode\PrefixCode
 * @group prefixCode
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new PrefixCode();
    }

    /**
     * Test that the code can be executed for "abracadabra".
     *
     * @group prefixCode_abracadabra
     */
    public function testCanExecuteAbracadabra(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - abracadabra.txt',
            "abracadabra" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Hello World !".
     *
     * @group prefixCode_helloWorld
     */
    public function testCanExecuteHelloWorld(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - hello world !.txt',
            "Hello World !" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Extra bit at the end".
     *
     * @group prefixCode_extraBitAtTheEnd
     */
    public function testCanExecuteExtraBitAtTheEnd(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - extra bit at the end.txt',
            "DECODE FAIL AT INDEX 186" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Missing first character".
     *
     * @group prefixCode_missingFirstCharacter
     */
    public function testCanExecuteMissingFirstCharacter(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - missing first character.txt',
            "DECODE FAIL AT INDEX 0" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Inception".
     *
     * @group prefixCode_inception
     */
    public function testCanExecuteInception(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - inception.txt',
            file_get_contents(__DIR__ . '/output/05 - inception.txt')
        );
    }

    /**
     * Test that the code can be executed for "Poor table".
     *
     * @group prefixCode_poorTable
     */
    public function testCanExecutePoorTable(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - poor table.txt',
            "A very poor table, anyway, your program should work !" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "No table !".
     *
     * @group prefixCode_noTable
     */
    public function testCanExecuteNoTable(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - no table !.txt',
            "DECODE FAIL AT INDEX 0" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Lonely character".
     *
     * @group prefixCode_lonelyCharacter
     */
    public function testCanExecuteLonelyCharacter(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - lonely character.txt',
            "zzzzzzzzzzzzzzz" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "ASCII art".
     *
     * @group prefixCode_ASCIIArt
     */
    public function testCanExecuteASCIIArt(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/09 - ASCII art.txt',
            file_get_contents(__DIR__ . '/output/09 - ASCII art.txt')
        );
    }

    /**
     * Test that the code can be executed for "Lorem ipsum".
     *
     * @group prefixCode_loremIpsum
     */
    public function testCanExecuteLoremIpsum(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/10 - lorem ipsum.txt',
            file_get_contents(__DIR__ . '/output/10 - lorem ipsum.txt')
        );
    }

    /**
     * Test that the code can be executed for "Parallel or not ?".
     *
     * @group prefixCode_parallelOrNot
     */
    public function testCanExecuteParallelOrNot(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/11 - parallel or not ?.txt',
            file_get_contents(__DIR__ . '/output/11 - parallel or not ?.txt')
        );
    }

    /**
     * Test that the code can be executed for "Lonely character v2".
     *
     * @group prefixCode_lonelyCharacterV2
     */
    public function testCanExecuteLonelyCharacterV2(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/12 - lonely character v2.txt',
            "1" . PHP_EOL
        );
    }
}
