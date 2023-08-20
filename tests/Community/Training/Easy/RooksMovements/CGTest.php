<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\RooksMovements;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\RooksMovements\RooksMovements;

/**
 * Tests for the "Rooks movements" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\RooksMovements\RooksMovements
 * @group rooksMovements
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new RooksMovements();
    }

    /**
     * Test that the code can be executed for "MOVING FREELY".
     *
     * @group rooksMovements_movingFreely
     */
    public function testCanExecuteMovingFreely(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - MOVING FREELY.txt',
            file_get_contents(__DIR__ . '/output/01 - MOVING FREELY.txt')
        );
    }

    /**
     * Test that the code can be executed for "CLOSE TO THE EDGE".
     *
     * @group rooksMovements_closeToTheEdge
     */
    public function testCanExecuteCloseToTheEdge(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - CLOSE TO THE EDGE.txt',
            file_get_contents(__DIR__ . '/output/02 - CLOSE TO THE EDGE.txt')
        );
    }

    /**
     * Test that the code can be executed for "ONLY ALLIES".
     *
     * @group rooksMovements_onlyAllies
     */
    public function testCanExecuteOnlyAllies(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - ONLY ALLIES.txt',
            file_get_contents(__DIR__ . '/output/03 - ONLY ALLIES.txt')
        );
    }

    /**
     * Test that the code can be executed for "FOR FRODOOO".
     *
     * @group rooksMovements_forFrodooo
     */
    public function testCanExecuteForFrodooo(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - FOR FRODOOO.txt',
            file_get_contents(__DIR__ . '/output/04 - FOR FRODOOO.txt')
        );
    }
}
