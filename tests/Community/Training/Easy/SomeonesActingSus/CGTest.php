<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\SomeonesActingSus;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Easy\SomeonesActingSus\SomeonesActingSus;

/**
 * Tests for the "Someone's acting sus...." puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\SomeonesActingSus\SomeonesActingSus
 * @group someonesActingSus
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new SomeonesActingSus();
    }

    /**
     * Test that the code can be executed for "Basic sus inspection".
     *
     * @group someonesActingSus_basicSusInspection
     */
    public function testCanExecuteBasicSusInspection(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - basic sus inspection.txt',
            file_get_contents(__DIR__ . '/output/01 - basic sus inspection.txt')
        );
    }

    /**
     * Test that the code can be executed for "Can you handle number signs?".
     *
     * @group someonesActingSus_canYouHandleNumberSigns
     */
    public function testCanExecuteCanYouHandleNumberSigns(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - can you handle number signs?.txt',
            file_get_contents(__DIR__ . '/output/02 - can you handle number signs?.txt')
        );
    }

    /**
     * Test that the code can be executed for "Your hacks kinda broke :)".
     *
     * @group someonesActingSus_yourHacksKindaBroke
     */
    public function testCanExecuteYourHacksKindaBroke(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - your hacks kinda broke :).txt',
            file_get_contents(__DIR__ . '/output/03 - your hacks kinda broke :).txt')
        );
    }

    /**
     * Test that the code can be executed for "The big data test".
     *
     * @group someonesActingSus_theBigDataTest
     */
    public function testCanExecuteTheBigDataTest(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - the big data test.txt',
            file_get_contents(__DIR__ . '/output/04 - the big data test.txt')
        );
    }
}
