<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\WheresWally;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\WheresWally\WheresWally;

/**
 * Tests for the "Where's Wally" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\WheresWally\WheresWally
 * @group wheresWally
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new WheresWally();
    }

    /**
     * Test that the code can be executed for "Alone (Exemple)".
     *
     * @group wheresWally_aloneExemple
     */
    public function testCanExecuteAloneExemple(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - alone (exemple).txt',
            "6 1" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Hidden in the crowd".
     *
     * @group wheresWally_hiddenInTheCrowd
     */
    public function testCanExecuteHiddenInTheCrowd(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - hidden in the crowd.txt',
            "5 4" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Hard".
     *
     * @group wheresWally_hard
     */
    public function testCanExecuteHard(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - hard.txt',
            "28 17" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Very hard".
     *
     * @group wheresWally_veryHard
     */
    public function testCanExecuteVeryHard(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - very hard.txt',
            "9 65" . PHP_EOL
        );
    }
}
