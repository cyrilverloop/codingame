<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\ABunnyAndCarrots;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\ABunnyAndCarrots\ABunnyAndCarrots;

/**
 * Tests for the "A bunny and carrots" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\ABunnyAndCarrots\ABunnyAndCarrots
 * @group aBunnyAndCarrots
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new ABunnyAndCarrots();
    }

    /**
     * Test that the code can be executed for "Small garden".
     *
     * @group aBunnyAndCarrots_smallGarden
     */
    public function testCanExecuteSmallGarden(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - small garden.txt',
            file_get_contents(__DIR__ . '/output/01 - small garden.txt')
        );
    }

    /**
     * Test that the code can be executed for "A bigger garden".
     *
     * @group aBunnyAndCarrots_aBiggerGarden
     */
    public function testCanExecuteABiggerGarden(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - a bigger garden.txt',
            file_get_contents(__DIR__ . '/output/02 - a bigger garden.txt')
        );
    }

    /**
     * Test that the code can be executed for "Wide garden".
     *
     * @group aBunnyAndCarrots_wideGarden
     */
    public function testCanExecuteWideGarden(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - wide garden.txt',
            file_get_contents(__DIR__ . '/output/03 - wide garden.txt')
        );
    }

    /**
     * Test that the code can be executed for "So many carrots!!".
     *
     * @group aBunnyAndCarrots_soManyCarrots
     */
    public function testCanExecuteSoManyCarrots(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - so many carrots!!.txt',
            file_get_contents(__DIR__ . '/output/04 - so many carrots!!.txt')
        );
    }
}
