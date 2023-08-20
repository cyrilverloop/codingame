<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\LogicGates;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\LogicGates\LogicGates;

/**
 * Tests for the "Logic gates" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\LogicGates\LogicGates
 * @group logicGates
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new LogicGates();
    }

    /**
     * Test that the code can be executed for "2 input signals, 3 gates".
     *
     * @group logicGates_2InputSignals3Gates
     */
    public function testCanExecute2InputSignals3Gates(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - 2 input signals, 3 gates.txt',
            file_get_contents(__DIR__ . '/output/01 - 2 input signals, 3 gates.txt')
        );
    }

    /**
     * Test that the code can be executed for "Inverter (NAND)".
     *
     * @group logicGates_inverterNAND
     */
    public function testCanExecuteInverterNAND(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - inverter (NAND).txt',
            "B --___---___---___---___---" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "AND".
     *
     * @group logicGates_AND
     */
    public function testCanExecuteAND(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - AND.txt',
            file_get_contents(__DIR__ . '/output/03 - AND.txt')
        );
    }

    /**
     * Test that the code can be executed for "OR".
     *
     * @group logicGates_OR
     */
    public function testCanExecuteOR(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - OR.txt',
            file_get_contents(__DIR__ . '/output/04 - OR.txt')
        );
    }

    /**
     * Test that the code can be executed for "XOR".
     *
     * @group logicGates_XOR
     */
    public function testCanExecuteXOR(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - XOR.txt',
            file_get_contents(__DIR__ . '/output/05 - XOR.txt')
        );
    }

    /**
     * Test that the code can be executed for "Buffer (OR)".
     *
     * @group logicGates_bufferOR
     */
    public function testCanExecuteBufferOR(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - buffer (OR).txt',
            "OUT -_--__---___----____-_--__---___" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "NAND".
     *
     * @group logicGates_NAND
     */
    public function testCanExecuteNAND(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - NAND.txt',
            file_get_contents(__DIR__ . '/output/07 - NAND.txt')
        );
    }

    /**
     * Test that the code can be executed for "NOR".
     *
     * @group logicGates_NOR
     */
    public function testCanExecuteNOR(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - NOR.txt',
            file_get_contents(__DIR__ . '/output/08 - NOR.txt')
        );
    }

    /**
     * Test that the code can be executed for "NXOR".
     *
     * @group logicGates_NXOR
     */
    public function testCanExecuteNXOR(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/09 - NXOR.txt',
            file_get_contents(__DIR__ . '/output/09 - NXOR.txt')
        );
    }

    /**
     * Test that the code can be executed for "All gates".
     *
     * @group logicGates_allGates
     */
    public function testCanExecuteAllGates(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/10 - all gates.txt',
            file_get_contents(__DIR__ . '/output/10 - all gates.txt')
        );
    }
}
