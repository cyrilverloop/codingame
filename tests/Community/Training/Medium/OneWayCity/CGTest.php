<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\OneWayCity;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\OneWayCity\OneWayCity;

/**
 * Tests for the "OneWay city" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\OneWayCity\OneWayCity
 * @group oneWayCity
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new OneWayCity();
    }

    /**
     * Test that the code can be executed for "Small village".
     *
     * @group oneWayCity_smallVillage
     */
    public function testCanExecuteSmallVillage(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - small village.txt',
            20 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "One way".
     *
     * @group oneWayCity_oneWay
     */
    public function testCanExecuteOneWay(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - one way.txt',
            1 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Small city".
     *
     * @group oneWayCity_smallCity
     */
    public function testCanExecuteSmallCity(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - small city.txt',
            497420 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "20th century".
     *
     * @group oneWayCity_20thCentury
     */
    public function testCanExecute20thCentury(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - 20th century.txt',
            "450883717216034179" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Conurbation".
     *
     * @group oneWayCity_conurbation
     */
    public function testCanExecuteConurbation(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - conurbation.txt',
            "1400749509083708812152608657850239525991600" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Megalopolis".
     *
     * @group oneWayCity_megalopolis
     */
    public function testCanExecuteMegalopolis(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - megalopolis.txt',
            file_get_contents(__DIR__ . '/output/06 - megalopolis.txt')
        );
    }
}
