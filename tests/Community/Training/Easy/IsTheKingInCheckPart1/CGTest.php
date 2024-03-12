<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\IsTheKingInCheckPart1;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\IsTheKingInCheckPart1\IsTheKingInCheckPart1;

/**
 * Tests for the "Is the king in check? (part 1)" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\IsTheKingInCheckPart1\IsTheKingInCheckPart1
 * @group isTheKingInCheckPart1
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new IsTheKingInCheckPart1();
    }

    /**
     * Test that the code can be executed for "R vs K".
     *
     * @group isTheKingInCheckPart1_RvsK
     */
    public function testCanExecuteRvsK(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - R vs K.txt',
            "Check" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "B vs K".
     *
     * @group isTheKingInCheckPart1_BvsK
     */
    public function testCanExecuteBvsK(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - B vs K.txt',
            "No Check" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Q vs K".
     *
     * @group isTheKingInCheckPart1_BvsK
     */
    public function testCanExecuteQvsK(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - Q vs K.txt',
            "Check" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "N vs K".
     *
     * @group isTheKingInCheckPart1_NvsK
     */
    public function testCanExecuteNvsK(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - N vs K.txt',
            "No Check" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Test 5".
     *
     * @group isTheKingInCheckPart1_test5
     */
    public function testCanExecuteTest5(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - test 5.txt',
            "Check" . PHP_EOL
        );
    }
}
