<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\NumeralSystem;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\NumeralSystem\NumeralSystem;

/**
 * Tests for the "Numeral system" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\NumeralSystem\NumeralSystem
 * @group numeralSystem
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new NumeralSystem();
    }

    /**
     * Test that the code can be executed for "Easy".
     *
     * @group numeralSystem_easy
     */
    public function testCanExecuteEasy(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - easy.txt',
            9 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Normal".
     *
     * @group numeralSystem_normal
     */
    public function testCanExecuteNormal(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - normal.txt',
            17 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Corner case min".
     *
     * @group numeralSystem_cornerCaseMin
     */
    public function testCanExecuteCornerCaseMin(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - corner case min.txt',
            2 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Corner case max".
     *
     * @group numeralSystem_cornerCaseMax
     */
    public function testCanExecuteCornerCaseMax(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - corner case max.txt',
            36 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Minimum valid system".
     *
     * @group numeralSystem_minimumValidSystem
     */
    public function testCanExecuteMinimumValidSystem(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - minimum valid system.txt',
            5 . PHP_EOL
        );
    }
}
