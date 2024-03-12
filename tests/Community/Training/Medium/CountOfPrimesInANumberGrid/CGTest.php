<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\CountOfPrimesInANumberGrid;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\CountOfPrimesInANumberGrid\CountOfPrimesInANumberGrid;

/**
 * Tests for the "Count of primes in a number grid" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\CountOfPrimesInANumberGrid\CountOfPrimesInANumberGrid
 * @group countOfPrimesInANumberGrid
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new CountOfPrimesInANumberGrid();
    }

    /**
     * Test that the code can be executed for "Test 1".
     *
     * @group countOfPrimesInANumberGrid_test1
     */
    public function testCanExecuteTest1(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - test 1.txt',
            6 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Much ado about nothing".
     *
     * @group countOfPrimesInANumberGrid_muchAdoAboutNothing
     */
    public function testCanExecuteMuchAdoAboutNothing(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - much ado about nothing.txt',
            1 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Gordon Lee puzzle".
     *
     * @group countOfPrimesInANumberGrid_gordonLeePuzzle
     */
    public function testCanExecuteGordonLeePuzzle(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - gordon lee puzzle.txt',
            50 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Large".
     *
     * @group countOfPrimesInANumberGrid_large
     */
    public function testCanExecuteLarge(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - large.txt',
            78 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Asymmetric".
     *
     * @group countOfPrimesInANumberGrid_asymmetric
     */
    public function testCanExecuteAsymmetric(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - asymmetric.txt',
            64 . PHP_EOL
        );
    }
}
