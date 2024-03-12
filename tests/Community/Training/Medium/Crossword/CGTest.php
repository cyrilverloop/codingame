<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\Crossword;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\Crossword\Crossword;

/**
 * Tests for the "Crossword" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\Crossword\Crossword
 * @group crossword
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new Crossword();
    }

    /**
     * Test that the code can be executed for "Byte-sized philosophy".
     *
     * @group crossword_byteSizedPhilosophy
     */
    public function testCanExecuteByteSizedPhilosophy(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - byte-sized philosophy.txt',
            file_get_contents(__DIR__ . '/output/01 - byte-sized philosophy.txt')
        );
    }

    /**
     * Test that the code can be executed for "Color mix".
     *
     * @group crossword_colorMix
     */
    public function testCanExecuteColorMix(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - color mix.txt',
            file_get_contents(__DIR__ . '/output/02 - color mix.txt')
        );
    }

    /**
     * Test that the code can be executed for "Crime scene".
     *
     * @group crossword_crimeScene
     */
    public function testCanExecuteCrimeScene(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - crime scene.txt',
            file_get_contents(__DIR__ . '/output/03 - crime scene.txt')
        );
    }

    /**
     * Test that the code can be executed for "Fruit salad".
     *
     * @group crossword_fruitSalad
     */
    public function testCanExecuteFruitSalad(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - fruit salad.txt',
            file_get_contents(__DIR__ . '/output/04 - fruit salad.txt')
        );
    }

    /**
     * Test that the code can be executed for "French writers 17th century".
     *
     * @group crossword_frenchWriters17thCentury
     */
    public function testCanExecuteFrenchWriters17thCentury(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - french writers 17th century.txt',
            file_get_contents(__DIR__ . '/output/05 - french writers 17th century.txt')
        );
    }

    /**
     * Test that the code can be executed for "Marvel series".
     *
     * @group crossword_marvelSeries
     */
    public function testCanExecuteMarvelSeries(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - marvel series.txt',
            file_get_contents(__DIR__ . '/output/06 - marvel series.txt')
        );
    }

    /**
     * Test that the code can be executed for "French coding game menu".
     *
     * @group depotOrganization_frenchCodingGameMenu
     */
    public function testCanExecuteFrenchCodingGameMenu(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - french coding game menu.txt',
            19 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "No way !".
     *
     * @group depotOrganization_noWay
     */
    public function testCanExecuteNoWay(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - no way !.txt',
            0 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Crash test".
     *
     * @group depotOrganization_crashTest
     */
    public function testCanExecuteCrashTest(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/09 - crash test.txt',
            0 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Base case test".
     *
     * @group crossword_baseCaseTest
     */
    public function testCanExecuteBaseCaseTest(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/10 - base case test.txt',
            file_get_contents(__DIR__ . '/output/10 - base case test.txt')
        );
    }

    /**
     * Test that the code can be executed for "Proximity test".
     *
     * @group crossword_proximityTest
     */
    public function testCanExecuteProximityTest(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/11 - proximity test.txt',
            file_get_contents(__DIR__ . '/output/11 - proximity test.txt')
        );
    }

    /**
     * Test that the code can be executed for "No match test".
     *
     * @group depotOrganization_noMatchTest
     */
    public function testCanExecuteNoMatchTest(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/12 - no match test.txt',
            0 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Multiple solutions test".
     *
     * @group depotOrganization_multipleSolutionsTest
     */
    public function testCanExecuteMultipleSolutionsTest(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/13 - multiple solutions test.txt',
            4 . PHP_EOL
        );
    }
}
