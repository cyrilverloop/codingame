<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\IdentifyingDataStructure;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\IdentifyingDataStructure\IdentifyingDataStructure;

/**
 * Tests for the "Identifying data structure" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\IdentifyingDataStructure\IdentifyingDataStructure
 * @group identifyingDataStructure
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new IdentifyingDataStructure();
    }

    /**
     * Test that the code can be executed for "Basic".
     *
     * @group joinTheDots_basic
     */
    public function testCanExecuteBasic(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - basic.txt',
            file_get_contents(__DIR__ . '/output/01 - basic.txt')
        );
    }

    /**
     * Test that the code can be executed for "More".
     *
     * @group joinTheDots_more
     */
    public function testCanExecuteMore(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - more.txt',
            file_get_contents(__DIR__ . '/output/02 - more.txt')
        );
    }

    /**
     * Test that the code can be executed for "Much more".
     *
     * @group joinTheDots_muchMore
     */
    public function testCanExecuteMuchMore(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - much more.txt',
            file_get_contents(__DIR__ . '/output/03 - much more.txt')
        );
    }

    /**
     * Test that the code can be executed for "Long ops".
     *
     * @group joinTheDots_longOps
     */
    public function testCanExecuteLongOps(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - long ops.txt',
            file_get_contents(__DIR__ . '/output/04 - long ops.txt')
        );
    }
}
