<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\Surakarta;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Medium\Surakarta\Surakarta;

/**
 * Tests for the "Surakarta" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\Surakarta\Surakarta
 * @group surakarta
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new Surakarta();
    }

    /**
     * Test that the code can be executed for "Around the world".
     *
     * @group surakarta_aroundTheWorld
     */
    public function testCanExecuteAroundTheWorld(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - around the world.txt',
            1 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Multiple ways".
     *
     * @group surakarta_multipleWays
     */
    public function testCanExecuteMultipleWays(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - multiple ways.txt',
            4 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Impossible".
     *
     * @group surakarta_impossible
     */
    public function testCanExecuteImpossible(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - impossible.txt',
            0 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Pass on yourself".
     *
     * @group surakarta_passOnYourself
     */
    public function testCanExecutePassOnYourself(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - pass on yourself.txt',
            4 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Angles are not OK".
     *
     * @group surakarta_anglesAreNotOK
     */
    public function testCanExecuteAnglesAreNotOK(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - angles are not OK.txt',
            2 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "We have a problem".
     *
     * @group surakarta_weHaveAProblem
     */
    public function testCanExecuteWeHaveAProblem(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - we have a problem.txt',
            0 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "It works".
     *
     * @group surakarta_itWorks
     */
    public function testCanExecuteItWorks(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - it works.txt',
            2 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Number test".
     *
     * @group surakarta_numberTest
     */
    public function testCanExecuteNumberTest(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - number test.txt',
            0 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Crossway".
     *
     * @group surakarta_crossway
     */
    public function testCanExecuteCrossway(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/09 - crossway.txt',
            8 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Real test".
     *
     * @group surakarta_realTest
     */
    public function testCanExecuteRealTest(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/10 - real test.txt',
            6 . PHP_EOL
        );
    }
}
