<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\FaxMachine;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\FaxMachine\FaxMachine;

/**
 * Tests for the "Fax machine" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\FaxMachine\FaxMachine
 * @group faxMachine
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new FaxMachine();
    }

    /**
     * Test that the code can be executed for "The example".
     *
     * @group faxMachine_theExample
     */
    public function testCanExecuteTheExample(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - the example.txt',
            file_get_contents(__DIR__ . '/output/01 - the example.txt')
        );
    }

    /**
     * Test that the code can be executed for "Half black half white".
     *
     * @group faxMachine_halfBlackHalfWhite
     */
    public function testCanExecuteHalfBlackHalfWhite(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - half black half white.txt',
            file_get_contents(__DIR__ . '/output/02 - half black half white.txt')
        );
    }

    /**
     * Test that the code can be executed for "Hello".
     *
     * @group faxMachine_hello
     */
    public function testCanExecuteHello(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - hello.txt',
            file_get_contents(__DIR__ . '/output/03 - hello.txt')
        );
    }

    /**
     * Test that the code can be executed for "Heart".
     *
     * @group faxMachine_heart
     */
    public function testCanExecuteHeart(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - heart.txt',
            file_get_contents(__DIR__ . '/output/04 - heart.txt')
        );
    }

    /**
     * Test that the code can be executed for "Inverse".
     *
     * @group faxMachine_inverse
     */
    public function testCanExecuteInverse(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - inverse.txt',
            file_get_contents(__DIR__ . '/output/05 - inverse.txt')
        );
    }
}
