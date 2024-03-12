<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\SmoothFactory;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\SmoothFactory\SmoothFactory;

/**
 * Tests for the "Smooth factory" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\SmoothFactory\SmoothFactory
 * @group smoothFactory
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new SmoothFactory();
    }

    /**
     * Test that the code can be executed for "Example".
     *
     * @group smoothFactory_example
     */
    public function testCanExecuteExample(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - example.txt',
            15 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Reading comprehension".
     *
     * @group smoothFactory_readingComprehension
     */
    public function testCanExecuteReadingComprehension(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - reading comprehension.txt',
            48 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Medium figures".
     *
     * @group smoothFactory_mediumFigures
     */
    public function testCanExecuteMediumFigures(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - medium figures.txt',
            2048552 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Large figures".
     *
     * @group smoothFactory_largeFigures
     */
    public function testCanExecuteLargeFigures(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - large figures.txt',
            6398507456756325 . PHP_EOL
        );
    }
}
