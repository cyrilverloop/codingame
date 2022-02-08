<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Training\Easy\Defibrillators;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Training\Easy\Defibrillators\Defibrillators;

/**
 * Tests for the "Defibrillators" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Training\Easy\Defibrillators\Defibrillators
 * @group defibrillators
 */
final class DefibrillatorsTest extends PuzzleTest
{
    // Methods :

    /**
     * Initialises tests.
     */
    public function setUp(): void
    {
        $this->puzzle = new Defibrillators();
    }

    /**
     * Test that the code can be executed for "Example".
     *
     * @group defibrillators_example
     */
    public function testCanExecuteExample(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - example.txt',
            'Maison de la Prevention Sante' . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Exact position".
     *
     * @group defibrillators_exactPosition
     */
    public function testCanExecuteExactPosition(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - exact position.txt',
            'Cimetiere Saint-Etienne' . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Complete file".
     *
     * @group defibrillators_completeFile
     */
    public function testCanExecuteCompleteFile(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - complete file.txt',
            "Caisse Primaire d'Assurance Maladie" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Complete file 2".
     *
     * @group defibrillators_completeFile2
     */
    public function testCanExecuteCompleteFile2(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - complete file 2.txt',
            "Amphitheatre d'O" . PHP_EOL
        );
    }
}
