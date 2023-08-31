<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Training\Easy\Defibrillators;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Training\Easy\Defibrillators\Defibrillators;
use PHPUnit\Framework\Attributes as PA;

/**
 * Tests for the "Defibrillators" puzzle.
 */
#[
    PA\CoversClass(Defibrillators::class),
    PA\Group('defibrillators'),
    PA\Medium
]
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new Defibrillators();
    }

    /**
     * Test that the code can be executed for "Example".
     */
    #[PA\Group('defibrillators_example')]
    public function testCanExecuteTestOnlyOneLetterE(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - example.txt',
            file_get_contents(__DIR__ . '/output/01 - example.txt')
        );
    }

    /**
     * Test that the code can be executed for "Exact position".
     */
    #[PA\Group('defibrillators_exactPosition')]
    public function testCanExecuteExactPosition(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - exact position.txt',
            file_get_contents(__DIR__ . '/output/02 - exact position.txt')
        );
    }

    /**
     * Test that the code can be executed for "Complete file".
     */
    #[PA\Group('defibrillators_completeFile')]
    public function testCanExecuteCompleteFile(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - complete file.txt',
            file_get_contents(__DIR__ . '/output/03 - complete file.txt')
        );
    }

    /**
     * Test that the code can be executed for "Complete file 2".
     */
    #[PA\Group('defibrillators_completeFile2')]
    public function testCanExecuteCompleteFile2(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - complete file 2.txt',
            file_get_contents(__DIR__ . '/output/04 - complete file 2.txt')
        );
    }
}
