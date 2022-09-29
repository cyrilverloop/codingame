<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\JumpingFrogs;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Medium\JumpingFrogs\JumpingFrogs;

/**
 * Tests for the "Jumping frogs" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\JumpingFrogs\JumpingFrogs
 * @group jumpingFrogs
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new JumpingFrogs();
    }

    /**
     * Test that the code can be executed for "Simple jump".
     *
     * @group jumpingFrogs_simpleJump
     */
    public function testCanExecuteSimpleJump(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - simple jump.txt',
            "Possible" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Little stretch".
     *
     * @group jumpingFrogs_littleStretch
     */
    public function testCanExecuteLittleStretch(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - little stretch.txt',
            "Impossible" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Long jump".
     *
     * @group jumpingFrogs_longJump
     */
    public function testCanExecuteLongJump(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - long jump.txt',
            "Possible" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Javelin jump".
     *
     * @group jumpingFrogs_javelinJump
     */
    public function testCanExecuteJavelinJump(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - javelin jump.txt',
            "Impossible" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Teleport".
     *
     * @group jumpingFrogs_teleport
     */
    public function testCanExecuteTeleport(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - teleport.txt',
            "Possible" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "All i need is jump".
     *
     * @group jumpingFrogs_allINeedIsJump
     */
    public function testCanExecuteAllINeedIsJump(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - all i need is jump.txt',
            "Possible" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Jump for the win".
     *
     * @group jumpingFrogs_jumpForTheWin
     */
    public function testCanExecuteJumpForTheWin(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - jump for the win.txt',
            "Impossible" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Jump is not enough".
     *
     * @group jumpingFrogs_jumpIsNotEnough
     */
    public function testCanExecuteJumpIsNotEnough(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - jump is not enough.txt',
            "Impossible" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Too many Jumps".
     *
     * @group jumpingFrogs_tooManyJumps
     */
    public function testCanExecuteTooManyJumps(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/09 - too many Jumps.txt',
            "Possible" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Lot of jumps".
     *
     * @group jumpingFrogs_lotOfJumps
     */
    public function testCanExecuteLotOfJumps(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/10 - lot of jumps.txt',
            "Possible" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Fly in the air".
     *
     * @group jumpingFrogs_flyInTheAir
     */
    public function testCanExecuteFlyInTheAir(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/11 - fly in the air.txt',
            "Impossible" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Over the mountain".
     *
     * @group jumpingFrogs_overTheMountain
     */
    public function testCanExecuteOverTheMountain(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/12 - over the mountain.txt',
            "Impossible" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Over the sky".
     *
     * @group jumpingFrogs_overTheSky
     */
    public function testCanExecuteOverTheSky(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/13 - over the sky.txt',
            "Impossible" . PHP_EOL
        );
    }
}
