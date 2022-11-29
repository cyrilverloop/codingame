<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\BloodTypes;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Medium\BloodTypes\BloodTypes;

/**
 * Tests for the "Blood types" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\BloodTypes\BloodTypes
 * @group bloodTypes
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new BloodTypes();
    }

    /**
     * Test that the code can be executed for "Example".
     *
     * @group bloodTypes_example
     */
    public function testCanExecuteExample(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - example.txt',
            file_get_contents(__DIR__ . '/output/01 - example.txt')
        );
    }

    /**
     * Test that the code can be executed for "Child blood types".
     *
     * @group bloodTypes_childBloodTypes
     */
    public function testCanExecuteChildBloodTypes(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - child blood types.txt',
            file_get_contents(__DIR__ . '/output/02 - child blood types.txt')
        );
    }

    /**
     * Test that the code can be executed for "Parents blood types".
     *
     * @group bloodTypes_parentsBloodTypes
     */
    public function testCanExecuteParentsBloodTypes(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - parents blood types.txt',
            file_get_contents(__DIR__ . '/output/03 - parents blood types.txt')
        );
    }

    /**
     * Test that the code can be executed for "All combins".
     *
     * @group bloodTypes_allCombins
     */
    public function testCanExecuteAllCombins(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - all combins.txt',
            file_get_contents(__DIR__ . '/output/04 - all combins.txt')
        );
    }
}
