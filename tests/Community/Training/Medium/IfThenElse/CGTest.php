<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\IfThenElse;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\IfThenElse\IfThenElse;

/**
 * Tests for the "If then else" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\IfThenElse\IfThenElse
 * @group ifThenElse
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new IfThenElse();
    }

    /**
     * Test that the code can be executed for "Multiple conditions".
     *
     * @group ifThenElse_multipleConditions
     */
    public function testCanExecuteMultipleConditions(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - multiple conditions.txt',
            4 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Nested conditions".
     *
     * @group ifThenElse_nestedConditions
     */
    public function testCanExecuteNestedConditions(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - nested conditions.txt',
            3 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Smallest program".
     *
     * @group ifThenElse_smallestProgram
     */
    public function testCanExecuteSmallestProgram(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - smallest program.txt',
            1 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Optional statements".
     *
     * @group ifThenElse_optionalStatements
     */
    public function testCanExecuteOptionalStatements(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - optional statements.txt',
            13 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "More conditions".
     *
     * @group ifThenElse_moreConditions
     */
    public function testCanExecuteMoreConditions(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - more conditions.txt',
            42 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Deeper nests".
     *
     * @group ifThenElse_deeperNests
     */
    public function testCanExecuteDeeperNests(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - deeper nests.txt',
            80 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Conditions overflow".
     *
     * @group ifThenElse_conditionsOverflow
     */
    public function testCanExecuteConditionsOverflow(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - conditions overflow.txt',
            4294967296 . PHP_EOL
        );
    }
}
