<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\NicholasBreakspeareAndHughOfEvesham;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\NicholasBreakspeareAndHughOfEvesham\NicholasBreakspeareAndHughOfEvesham;

/**
 * Tests for the "Nicholas Breakspeare and Hugh of Evesham" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\NicholasBreakspeareAndHughOfEvesham\NicholasBreakspeareAndHughOfEvesham
 * @group nicholasBreakspeareAndHughOfEvesham
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new NicholasBreakspeareAndHughOfEvesham();
    }

    /**
     * Test that the code can be executed for "Example".
     *
     * @group nicholasBreakspeareAndHughOfEvesham_example
     */
    public function testCanExecuteExample(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - example.txt',
            "five hundred twenty-five thousand six hundred" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "The basics".
     *
     * @group nicholasBreakspeareAndHughOfEvesham_theBasics
     */
    public function testCanExecuteTheBasics(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - the basics.txt',
            file_get_contents(__DIR__ . '/output/02 - the basics.txt')
        );
    }

    /**
     * Test that the code can be executed for "The teens".
     *
     * @group nicholasBreakspeareAndHughOfEvesham_theTeens
     */
    public function testCanExecuteTheTeens(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - the teens.txt',
            file_get_contents(__DIR__ . '/output/03 - the teens.txt')
        );
    }

    /**
     * Test that the code can be executed for "Some powers of 10".
     *
     * @group nicholasBreakspeareAndHughOfEvesham_somePowersOf10
     */
    public function testCanExecuteSomePowersOf10(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - some powers of 10.txt',
            file_get_contents(__DIR__ . '/output/04 - some powers of 10.txt')
        );
    }

    /**
     * Test that the code can be executed for "Some powers of 2".
     *
     * @group nicholasBreakspeareAndHughOfEvesham_somePowersOf2
     */
    public function testCanExecuteSomePowersOf2(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - some powers of 2.txt',
            file_get_contents(__DIR__ . '/output/05 - some powers of 2.txt')
        );
    }

    /**
     * Test that the code can be executed for "Extrema".
     *
     * @group nicholasBreakspeareAndHughOfEvesham_extrema
     */
    public function testCanExecuteExtrema(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - extrema.txt',
            file_get_contents(__DIR__ . '/output/06 - extrema.txt')
        );
    }

    /**
     * Test that the code can be executed for "Utter randomness".
     *
     * @group nicholasBreakspeareAndHughOfEvesham_utterRandomness
     */
    public function testCanExecuteUtterRandomness(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - utter randomness.txt',
            file_get_contents(__DIR__ . '/output/07 - utter randomness.txt')
        );
    }
}
