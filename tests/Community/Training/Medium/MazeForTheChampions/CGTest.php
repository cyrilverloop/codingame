<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\MazeForTheChampions;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\MazeForTheChampions\MazeForTheChampions;

/**
 * Tests for the "Maze for the champions" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\MazeForTheChampions\MazeForTheChampions
 * @group mazeForTheChampions
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new MazeForTheChampions();
    }

    /**
     * Test that the code can be executed for "1: easy for warrior".
     *
     * @group mazeForTheChampions_easyForWarrior
     */
    public function testCanExecuteEasyForWarrior(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - easy for warrior.txt',
            file_get_contents(__DIR__ . '/output/01 - easy for warrior.txt')
        );
    }

    /**
     * Test that the code can be executed for "2: easy for elf".
     *
     * @group mazeForTheChampions_easyForElf
     */
    public function testCanExecuteEasyForElf(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - easy for elf.txt',
            file_get_contents(__DIR__ . '/output/02 - easy for elf.txt')
        );
    }

    /**
     * Test that the code can be executed for "3: easy for mage".
     *
     * @group mazeForTheChampions_easyForMage
     */
    public function testCanExecuteEasyForMage(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - easy for mage.txt',
            file_get_contents(__DIR__ . '/output/03 - easy for mage.txt')
        );
    }

    /**
     * Test that the code can be executed for "4: easy for dwarf".
     *
     * @group mazeForTheChampions_easyForDwarf
     */
    public function testCanExecuteEasyForDwarf(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - easy for dwarf.txt',
            file_get_contents(__DIR__ . '/output/04 - easy for dwarf.txt')
        );
    }

    /**
     * Test that the code can be executed for "5: complex for warrior".
     *
     * @group mazeForTheChampions_complexForWarrior
     */
    public function testCanExecuteComplexForWarrior(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - complex for warrior.txt',
            file_get_contents(__DIR__ . '/output/05 - complex for warrior.txt')
        );
    }

    /**
     * Test that the code can be executed for "6: complex for elf".
     *
     * @group mazeForTheChampions_complexForElf
     */
    public function testCanExecuteComplexForElf(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - complex for elf.txt',
            file_get_contents(__DIR__ . '/output/06 - complex for elf.txt')
        );
    }

    /**
     * Test that the code can be executed for "7: complex for mage".
     *
     * @group mazeForTheChampions_complexForMage
     */
    public function testCanExecuteComplexForMage(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - complex for mage.txt',
            file_get_contents(__DIR__ . '/output/07 - complex for mage.txt')
        );
    }

    /**
     * Test that the code can be executed for "8: complex for dwarf".
     *
     * @group mazeForTheChampions_complexForDwarf
     */
    public function testCanExecuteComplexForDwarf(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - complex for dwarf.txt',
            file_get_contents(__DIR__ . '/output/08 - complex for dwarf.txt')
        );
    }
}
