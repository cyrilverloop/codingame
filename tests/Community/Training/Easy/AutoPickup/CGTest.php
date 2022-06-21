<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\AutoPickup;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Easy\AutoPickup\AutoPickup;

/**
 * Tests for the "Auto pickup" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\AutoPickup\AutoPickup
 * @group autoPickup
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new AutoPickup();
    }

    /**
     * Test that the code can be executed for "just a item drop".
     *
     * @group autoPickup_justAItemDrop
     */
    public function testCanExecuteJustAItemDrop(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - just a item drop.txt',
            "001001010" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "more than 1 drop".
     *
     * @group autoPickup_moreThan1Drop
     */
    public function testCanExecuteMoreThan1Drop(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - more than 1 drop.txt',
            "00100010001001011" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "other packets".
     *
     * @group autoPickup_otherPackets
     */
    public function testCanExecuteOtherPackets(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - other packets.txt',
            "00100011" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "In between".
     *
     * @group autoPickup_inBetween
     */
    public function testCanExecuteInBetween(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - in between.txt',
            "001001011" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "that is a long one".
     *
     * @group autoPickup_thatIsALongOne
     */
    public function testCanExecuteThatIsALongOne(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - that is a long one.txt',
            "0010011101001100011100011" . PHP_EOL
        );
    }
}
