<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\XMLMDF2016;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\XMLMDF2016\XMLMDF2016;

/**
 * Tests for the "XML MDF-2016" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\XMLMDF2016\XMLMDF2016
 * @group XMLMDF2016
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new XMLMDF2016();
    }

    /**
     * Test that the code can be executed for "Only one".
     *
     * @group XMLMDF2016_onlyOne
     */
    public function testCanExecuteOnlyOne(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - only one.txt',
            "a" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Nested might lose".
     *
     * @group XMLMDF2016_nestedMightLose
     */
    public function testCanExecuteNestedMightLose(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - nested might lose.txt',
            "a" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Several nested might win".
     *
     * @group XMLMDF2016_severalNestedMightWin
     */
    public function testCanExecuteSeveralNestedMightWin(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - several nested might win.txt',
            "b" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Several deeper nested might win too".
     *
     * @group XMLMDF2016_severalDeeperNestedMightWinToo
     */
    public function testCanExecuteSeveralDeeperNestedMightWinToo(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - several deeper nested might win too.txt',
            "c" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Only one shall win".
     *
     * @group XMLMDF2016_onlyOneShallWin
     */
    public function testCanExecuteOnlyOneShallWin(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - only one shall win.txt',
            "c" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Size should not matter".
     *
     * @group XMLMDF2016_sizeShouldNotMatter
     */
    public function testCanExecuteSizeShouldNotMatter(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - size should not matter.txt',
            "f" . PHP_EOL
        );
    }
}
