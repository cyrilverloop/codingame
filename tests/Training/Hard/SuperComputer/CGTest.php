<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Training\Hard\SuperComputer;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Training\Hard\SuperComputer\SuperComputer;

/**
 * Tests for the "Super computer" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Training\Hard\SuperComputer\SuperComputer
 * @group superComputer
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new SuperComputer();
    }

    /**
     * Test that the code can be executed for "Example 1".
     *
     * @group superComputer_example1
     */
    public function testCanExecuteExample1(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - example 1.txt',
            3 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Example 2".
     *
     * @group superComputer_example2
     */
    public function testCanExecuteExample2(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - example 2.txt',
            4 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Large number of scientists".
     *
     * @group superComputer_largeNumberOfScientists
     */
    public function testCanExecuteLargeNumberOfScientists(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - large number of scientists.txt',
            7879 . PHP_EOL
        );
    }
}
