<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\CGSMinifier;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\CGSMinifier\CGSMinifier;

/**
 * Tests for the "CGS minifier" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\CGSMinifier\CGSMinifier
 * @group CGSMinifier
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new CGSMinifier();
    }

    /**
     * Test that the code can be executed for "Example".
     *
     * @group CGSMinifier_example
     */
    public function testCanExecuteExample(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - example.txt',
            "(\$a$='hello';print\$a$;)" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "1".
     *
     * @group CGSMinifier_1
     */
    public function testCanExecute1(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - 1.txt',
            "('hello')" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "2".
     *
     * @group CGSMinifier_2
     */
    public function testCanExecute2(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - 2.txt',
            "print'SomeSpaces  and    tabs';" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "3".
     *
     * @group CGSMinifier_3
     */
    public function testCanExecute3(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - 3.txt',
            "\$a$;(\$a$='I like trains';)print\$a$;" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "4".
     *
     * @group CGSMinifier_4
     */
    public function testCanExecute4(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - 4.txt',
            file_get_contents(__DIR__ . '/output/05 - 4.txt')
        );
    }
}
