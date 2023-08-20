<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\TheseRomansAreCrazy;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\TheseRomansAreCrazy\TheseRomansAreCrazy;

/**
 * Tests for the "These romans are crazy!" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\TheseRomansAreCrazy\TheseRomansAreCrazy
 * @group theseRomansAreCrazy
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new TheseRomansAreCrazy();
    }

    /**
     * Test that the code can be executed for "6 + 7 = 13".
     *
     * @group theseRomansAreCrazy_6Plus7Equals13
     */
    public function testCanExecute6Plus7Equals13(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - 6 + 7 = 13.txt',
            "XIII" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "12 + 27 = 39".
     *
     * @group theseRomansAreCrazy_12Plus27Equals39
     */
    public function testCanExecute12Plus27Equals39(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - 12 + 27 = 39.txt',
            "XXXIX" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "123 + 321 = 444".
     *
     * @group theseRomansAreCrazy_123Plus321Equals444
     */
    public function testCanExecute123Plus321Equals444(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - 123 + 321 = 444.txt',
            "CDXLIV" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "2016 + 999 = 3015".
     *
     * @group theseRomansAreCrazy_2016Plus999Equals3015
     */
    public function testCanExecute2016Plus999Equals3015(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - 2016 + 999 = 3015.txt',
            "MMMXV" . PHP_EOL
        );
    }
}
