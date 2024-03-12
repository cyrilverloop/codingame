<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\MagicString;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\MagicString\MagicString;

/**
 * Tests for the "Magic string" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\MagicString\MagicString
 * @group magicString
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new MagicString();
    }

    /**
     * Test that the code can be executed for "Example".
     *
     * @group magicString_example
     */
    public function testCanExecuteExample(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - example.txt',
            "JESS" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Louis".
     *
     * @group magicString_louis
     */
    public function testCanExecuteLouis(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - louis.txt',
            "LOUISVII" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "1-10".
     *
     * @group magicString_1-10
     */
    public function testCanExecute110(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - 1-10.txt',
            "P" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Metals".
     *
     * @group magicString_metals
     */
    public function testCanExecuteMetals(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - metals.txt',
            "MN" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Quick test 1".
     *
     * @group magicString_quickTest1
     */
    public function testCanExecuteQuickTest1(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - quick test 1.txt',
            "ABCH" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Quick test 2".
     *
     * @group magicString_quickTest2
     */
    public function testCanExecuteQuickTest2(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - quick test 2.txt',
            "ABD" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Quick test 3".
     *
     * @group magicString_quickTest3
     */
    public function testCanExecuteQuickTest3(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - quick test 3.txt',
            "A" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Quick test 4".
     *
     * @group magicString_quickTest4
     */
    public function testCanExecuteQuickTest4(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - quick test 4.txt',
            "A" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Quick test 5".
     *
     * @group magicString_quickTest5
     */
    public function testCanExecuteQuickTest5(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/09 - quick test 5.txt',
            "Z" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Tricky".
     *
     * @group magicString_tricky
     */
    public function testCanExecuteTricky(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/10 - tricky.txt',
            "DIZZY" . PHP_EOL
        );
    }
}
