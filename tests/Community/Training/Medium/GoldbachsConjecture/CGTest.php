<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\GoldbachsConjecture;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\GoldbachsConjecture\GoldbachsConjecture;

/**
 * Tests for the "Goldbach’s conjecture" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\GoldbachsConjecture\GoldbachsConjecture
 * @group goldbachsConjecture
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new GoldbachsConjecture();
    }

    /**
     * Test that the code can be executed for "Example".
     *
     * @group goldbachsConjecture_example
     */
    public function testCanExecuteExample(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - example.txt',
            4 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Be careful".
     *
     * @group goldbachsConjecture_beCareful
     */
    public function testCanExecuteBeCareful(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - be careful.txt',
            file_get_contents(__DIR__ . '/output/02 - be careful.txt')
        );
    }

    /**
     * Test that the code can be executed for "No more alone".
     *
     * @group goldbachsConjecture_noMoreAlone
     */
    public function testCanExecuteNoMoreAlone(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - no more alone.txt',
            file_get_contents(__DIR__ . '/output/03 - no more alone.txt')
        );
    }

    /**
     * Test that the code can be executed for "Some hulks".
     *
     * @group goldbachsConjecture_someHulks
     */
    public function testCanExecuteSomeHulks(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - some hulks.txt',
            file_get_contents(__DIR__ . '/output/04 - some hulks.txt')
        );
    }

    /**
     * Test that the code can be executed for "Commandments".
     *
     * @group goldbachsConjecture_commandments
     */
    public function testCanExecuteCommandments(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - commandments.txt',
            file_get_contents(__DIR__ . '/output/05 - commandments.txt')
        );
    }

    /**
     * Test that the code can be executed for "Dalmatians".
     *
     * @group goldbachsConjecture_dalmatians
     */
    public function testCanExecuteDalmatians(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - dalmatians.txt',
            file_get_contents(__DIR__ . '/output/06 - dalmatians.txt')
        );
    }

    /**
     * Test that the code can be executed for "Tacite".
     *
     * @group goldbachsConjecture_tacite
     */
    public function testCanExecuteTacite(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - tacite.txt',
            file_get_contents(__DIR__ . '/output/07 - tacite.txt')
        );
    }
}
