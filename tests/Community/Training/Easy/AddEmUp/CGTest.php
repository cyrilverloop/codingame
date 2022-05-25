<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\AddEmUp;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Easy\AddEmUp\AddEmUp;

/**
 * Tests for the "Add'em up" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\AddEmUp\AddEmUp
 * @group addEmUp
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new AddEmUp();
    }

    /**
     * Test that the code can be executed for "Simple".
     *
     * @group addEmUp_simple
     */
    public function testCanExecuteSimple(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - simple.txt',
            9 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Easy".
     *
     * @group addEmUp_easy
     */
    public function testCanExecuteEasy(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - easy.txt',
            24 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "In a row".
     *
     * @group addEmUp_inARow
     */
    public function testCanExecuteInARow(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - in a row.txt',
            261 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "XX".
     *
     * @group addEmUp_XX
     */
    public function testCanExecuteXX(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - XX.txt',
            4502962 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "CC".
     *
     * @group addEmUp_CC
     */
    public function testCanExecuteCC(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - CC.txt',
            7718767 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "D".
     *
     * @group addEmUp_D
     */
    public function testCanExecuteD(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - D.txt',
            224281401 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "M".
     *
     * @group addEmUp_M
     */
    public function testCanExecuteM(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - M.txt',
            504259 . PHP_EOL
        );
    }
}
