<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\KaprekarsRoutine;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\KaprekarsRoutine\KaprekarsRoutine;

/**
 * Tests for the "Kaprekar's routine" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\KaprekarsRoutine\KaprekarsRoutine
 * @group kaprekarsRoutine
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new KaprekarsRoutine();
    }

    /**
     * Test that the code can be executed for "Length 1 cycle".
     *
     * @group kaprekarsRoutine_length1Cycle
     */
    public function testCanExecuteLength1Cycle(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - length 1 cycle.txt',
            6174 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Dont forget padding".
     *
     * @group kaprekarsRoutine_dontForgetPadding
     */
    public function testCanExecuteDontForgetPadding(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - dont forget padding.txt',
            "09 81 63 27 45" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Number of the beast".
     *
     * @group kaprekarsRoutine_numberOfTheBeast
     */
    public function testCanExecuteNumberOfTheBeast(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - number of the beast.txt',
            "000" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Big".
     *
     * @group kaprekarsRoutine_big
     */
    public function testCanExecuteBig(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - big.txt',
            "43208766 85317642 75308643 84308652 86308632 86326632 64326654" . PHP_EOL
        );
    }
}
