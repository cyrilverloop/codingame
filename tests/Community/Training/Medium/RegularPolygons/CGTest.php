<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\RegularPolygons;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\RegularPolygons\RegularPolygons;

/**
 * Tests for the "Regular polygons" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\RegularPolygons\RegularPolygons
 * @group regularPolygons
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new RegularPolygons();
    }

    /**
     * Test that the code can be executed for "Example".
     *
     * @group regularPolygons_example
     */
    public function testCanExecuteExample(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - example.txt',
            4 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Shortest range".
     *
     * @group regularPolygons_shortestRange
     */
    public function testCanExecuteShortestRange(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - shortest range.txt',
            1 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Short range".
     *
     * @group regularPolygons_shortRange
     */
    public function testCanExecuteShortRange(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - short range.txt',
            88 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Medium range".
     *
     * @group regularPolygons_mediumRange
     */
    public function testCanExecuteMediumRange(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - medium range.txt',
            199 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Long range".
     *
     * @group regularPolygons_longRange
     */
    public function testCanExecuteLongRange(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - long range.txt',
            494 . PHP_EOL
        );
    }
}
