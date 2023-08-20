<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\NGRBasicRadar;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\NGRBasicRadar\NGRBasicRadar;

/**
 * Tests for the "NGR - basic radar" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\NGRBasicRadar\NGRBasicRadar
 * @group NGRBasicRadar
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new NGRBasicRadar();
    }

    /**
     * Test that the code can be executed for "Low density, 1 ticket".
     *
     * @group NGRBasicRadar_lowDensity1Ticket
     */
    public function testCanExecuteLowDensity1Ticket(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - low density 1 ticket.txt',
            "FZ-792-EC 134" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Low density, many ticket".
     *
     * @group NGRBasicRadar_lowDensityManyTicket
     */
    public function testCanExecuteLowDensityManyTicket(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - low density many ticket.txt',
            file_get_contents(__DIR__ . '/output/02 - low density many ticket.txt')
        );
    }

    /**
     * Test that the code can be executed for "Medium density".
     *
     * @group NGRBasicRadar_mediumDensity
     */
    public function testCanExecuteMediumDensity(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - medium density.txt',
            file_get_contents(__DIR__ . '/output/03 - medium density.txt')
        );
    }

    /**
     * Test that the code can be executed for "Test 4".
     *
     * @group NGRBasicRadar_test4
     */
    public function testCanExecuteTest4(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - test 4.txt',
            file_get_contents(__DIR__ . '/output/04 - test 4.txt')
        );
    }
}
