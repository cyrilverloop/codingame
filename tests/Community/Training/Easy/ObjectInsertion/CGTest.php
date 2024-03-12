<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\ObjectInsertion;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\ObjectInsertion\ObjectInsertion;

/**
 * Tests for the "Object insertion" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\ObjectInsertion\ObjectInsertion
 * @group objectInsertion
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new ObjectInsertion();
    }

    /**
     * Test that the code can be executed for "Example".
     *
     * @group objectInsertion_example
     */
    public function testCanExecuteExample(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - example.txt',
            file_get_contents(__DIR__ . '/output/01 - example.txt')
        );
    }

    /**
     * Test that the code can be executed for "No solution".
     *
     * @group objectInsertion_noSolution
     */
    public function testCanExecuteNoSolution(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - no solution.txt',
            0 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Multiple solutions".
     *
     * @group objectInsertion_multipleSolutions
     */
    public function testCanExecuteMultipleSolutions(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - multiple solutions.txt',
            4 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "No place for dot".
     *
     * @group objectInsertion_noPlaceForDot
     */
    public function testCanExecuteNoPlaceForDot(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - no place for dot.txt',
            0 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Empty smallest grid".
     *
     * @group objectInsertion_emptySmallestGrid
     */
    public function testCanExecuteEmptySmallestGrid(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - empty smallest grid.txt',
            file_get_contents(__DIR__ . '/output/05 - empty smallest grid.txt')
        );
    }

    /**
     * Test that the code can be executed for "Fragmented object".
     *
     * @group objectInsertion_fragmentedObject
     */
    public function testCanExecuteFragmentedObject(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - fragmented object.txt',
            file_get_contents(__DIR__ . '/output/06 - fragmented object.txt')
        );
    }

    /**
     * Test that the code can be executed for "Lot of solutions".
     *
     * @group objectInsertion_lotOfSolutions
     */
    public function testCanExecuteLotOfSolutions(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - lot of solutions.txt',
            42 . PHP_EOL
        );
    }
}
