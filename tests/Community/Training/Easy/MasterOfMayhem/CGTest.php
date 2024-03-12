<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\MasterOfMayhem;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\MasterOfMayhem\MasterOfMayhem;

/**
 * Tests for the "Master of mayhem" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\MasterOfMayhem\MasterOfMayhem
 * @group masterOfMayhem
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new MasterOfMayhem();
    }

    /**
     * Test that the code can be executed for "Simple".
     *
     * @group masterOfMayhem_simple
     */
    public function testCanExecuteSimple(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - simple.txt',
            "SPEEDO" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "No info".
     *
     * @group masterOfMayhem_noInfo
     */
    public function testCanExecuteNoInfo(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - no info.txt',
            "CHICO" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Too many cooks".
     *
     * @group masterOfMayhem_tooManyCooks
     */
    public function testCanExecuteTooManyCooks(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - too many cooks.txt',
            "INDETERMINATE" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Nobody left".
     *
     * @group masterOfMayhem_nobodyLeft
     */
    public function testCanExecuteNobodyLeft(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - nobody left.txt',
            "MISSING" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Only one".
     *
     * @group masterOfMayhem_onlyOne
     */
    public function testCanExecuteOnlyOne(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - only one.txt',
            "SOLO" . PHP_EOL
        );
    }
}
