<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\ElementaryCellularAutomaton;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\ElementaryCellularAutomaton\ElementaryCellularAutomaton;

/**
 * Tests for the "Elementary cellular automaton" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\ElementaryCellularAutomaton\ElementaryCellularAutomaton
 * @group elementaryCellularAutomaton
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new ElementaryCellularAutomaton();
    }

    /**
     * Test that the code can be executed for "Pyramid".
     *
     * @group elementaryCellularAutomaton_pyramid
     */
    public function testCanExecutePyramid(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - pyramid.txt',
            file_get_contents(__DIR__ . '/output/01 - pyramid.txt')
        );
    }

    /**
     * Test that the code can be executed for "Sierpiński triangle".
     *
     * @group elementaryCellularAutomaton_sierpinskiTriangle
     */
    public function testCanExecuteSierpinskiTriangle(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - sierpiński triangle.txt',
            file_get_contents(__DIR__ . '/output/02 - sierpiński triangle.txt')
        );
    }

    /**
     * Test that the code can be executed for "Rule 30: conus textile".
     *
     * @group elementaryCellularAutomaton_rule30ConusTextile
     */
    public function testCanExecuteRule30ConusTextile(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - rule 30: conus textile.txt',
            file_get_contents(__DIR__ . '/output/03 - rule 30: conus textile.txt')
        );
    }

    /**
     * Test that the code can be executed for "Sierpiński triangle, continued".
     *
     * @group elementaryCellularAutomaton_sierpinskiTriangleContinued
     */
    public function testCanExecuteSierpinskiTriangleContinued(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - sierpiński triangle, continued.txt',
            file_get_contents(__DIR__ . '/output/04 - sierpiński triangle, continued.txt')
        );
    }

    /**
     * Test that the code can be executed for "Rule 110, different start".
     *
     * @group elementaryCellularAutomaton_rule110DifferentStart
     */
    public function testCanExecuteRule110DifferentStart(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - rule 110, different start.txt',
            file_get_contents(__DIR__ . '/output/05 - rule 110, different start.txt')
        );
    }
}
