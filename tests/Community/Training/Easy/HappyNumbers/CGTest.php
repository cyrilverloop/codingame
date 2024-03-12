<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\HappyNumbers;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\HappyNumbers\HappyNumbers;

/**
 * Tests for the "Happy numbers" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\HappyNumbers\HappyNumbers
 * @group happyNumbers
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new HappyNumbers();
    }

    /**
     * Test that the code can be executed for "Simple".
     *
     * @group happyNumbers_simple
     */
    public function testCanExecuteSimple(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - simple.txt',
            file_get_contents(__DIR__ . '/output/01 - simple.txt')
        );
    }

    /**
     * Test that the code can be executed for "Moderate".
     *
     * @group happyNumbers_moderate
     */
    public function testCanExecuteModerate(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - moderate.txt',
            file_get_contents(__DIR__ . '/output/02 - moderate.txt')
        );
    }

    /**
     * Test that the code can be executed for "Serious".
     *
     * @group happyNumbers_serious
     */
    public function testCanExecuteSerious(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - serious.txt',
            file_get_contents(__DIR__ . '/output/03 - serious.txt')
        );
    }

    /**
     * Test that the code can be executed for "Watch out the limit".
     *
     * @group happyNumbers_watchOutTheLimit
     */
    public function testCanExecuteWatchOutTheLimit(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - watch out the limit.txt',
            file_get_contents(__DIR__ . '/output/04 - watch out the limit.txt')
        );
    }

    /**
     * Test that the code can be executed for "Cocktail".
     *
     * @group happyNumbers_cocktail
     */
    public function testCanExecuteCocktail(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - cocktail.txt',
            file_get_contents(__DIR__ . '/output/05 - cocktail.txt')
        );
    }
}
