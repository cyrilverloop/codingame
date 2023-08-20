<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\One0One0One;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\One0One0One\One0One0One;

/**
 * Tests for the "1010(1)" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\One0One0One\One0One0One
 * @group one0One0One
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new One0One0One();
    }

    /**
     * Test that the code can be executed for "Tiny".
     *
     * @group one0One0One_tiny
     */
    public function testCanExecuteTiny(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - tiny.txt',
            4 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Stretch".
     *
     * @group one0One0One_stretch
     */
    public function testCanExecuteStretch(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - stretch.txt',
            2 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "You lose".
     *
     * @group one0One0One_youLose
     */
    public function testCanExecuteYouLose(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - you lose.txt',
            0 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Big".
     *
     * @group one0One0One_big
     */
    public function testCanExecuteBig(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - big.txt',
            3 . PHP_EOL
        );
    }
}
