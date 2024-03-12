<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\OneDBushFire;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\OneDBushFire\OneDBushFire;

/**
 * Tests for the "1D bush fire" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\OneDBushFire\OneDBushFire
 * @group oneDBushFire
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new OneDBushFire();
    }

    /**
     * Test that the code can be executed for "Example".
     *
     * @group oneDBushFire_example
     */
    public function testCanExecuteExample(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - example.txt',
            file_get_contents(__DIR__ . '/output/01 - example.txt')
        );
    }

    /**
     * Test that the code can be executed for "Basic operations".
     *
     * @group oneDBushFire_basicOperations
     */
    public function testCanExecuteBasicOperations(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - basic operations.txt',
            file_get_contents(__DIR__ . '/output/02 - basic operations.txt')
        );
    }

    /**
     * Test that the code can be executed for "Smoky trail".
     *
     * @group oneDBushFire_smokyTrail
     */
    public function testCanExecuteSmokyTrail(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - smoky trail.txt',
            file_get_contents(__DIR__ . '/output/03 - smoky trail.txt')
        );
    }

    /**
     * Test that the code can be executed for "Traps in fames".
     *
     * @group oneDBushFire_trapsInFames
     */
    public function testCanExecuteTrapsInFames(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - traps in fames.txt',
            file_get_contents(__DIR__ . '/output/04 - traps in fames.txt')
        );
    }

    /**
     * Test that the code can be executed for "Ambushes".
     *
     * @group oneDBushFire_ambushes
     */
    public function testCanExecuteAmbushes(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - ambushes.txt',
            file_get_contents(__DIR__ . '/output/05 - ambushes.txt')
        );
    }
}
