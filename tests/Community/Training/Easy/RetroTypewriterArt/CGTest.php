<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\RetroTypewriterArt;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\RetroTypewriterArt\RetroTypewriterArt;

/**
 * Tests for the "Retro typewriter art" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\RetroTypewriterArt\RetroTypewriterArt
 * @group retroTypewriterArt
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new RetroTypewriterArt();
    }

    /**
     * Test that the code can be executed for "Simple cat".
     *
     * @group retroTypewriterArt_simpleCat
     */
    public function testCanExecuteSimpleCat(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - simple cat.txt',
            file_get_contents(__DIR__ . '/output/01 - simple cat.txt')
        );
    }

    /**
     * Test that the code can be executed for "Spider".
     *
     * @group retroTypewriterArt_spider
     */
    public function testCanExecuteSpider(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - spider.txt',
            file_get_contents(__DIR__ . '/output/02 - spider.txt')
        );
    }

    /**
     * Test that the code can be executed for "Hen night".
     *
     * @group retroTypewriterArt_henNight
     */
    public function testCanExecuteHenNight(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - hen night.txt',
            file_get_contents(__DIR__ . '/output/03 - hen night.txt')
        );
    }

    /**
     * Test that the code can be executed for "Yogi bear has head room".
     *
     * @group retroTypewriterArt_yogiBearHasHeadRoom
     */
    public function testCanExecuteYogiBearHasHeadRoom(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - yogi bear has head room.txt',
            file_get_contents(__DIR__ . '/output/04 - yogi bear has head room.txt')
        );
    }

    /**
     * Test that the code can be executed for "A foundation of 8's".
     *
     * @group retroTypewriterArt_aFoundationOf8s
     */
    public function testCanExecuteAFoundationOf8s(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - a foundation of 8s.txt',
            file_get_contents(__DIR__ . '/output/05 - a foundation of 8s.txt')
        );
    }

    /**
     * Test that the code can be executed for "Minimalist".
     *
     * @group retroTypewriterArt_minimalist
     */
    public function testCanExecuteMinimalist(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - minimalist.txt',
            file_get_contents(__DIR__ . '/output/06 - minimalist.txt')
        );
    }

    /**
     * Test that the code can be executed for "Impossible triangle".
     *
     * @group retroTypewriterArt_impossibleTriangle
     */
    public function testCanExecuteImpossibleTriangle(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - impossible triangle.txt',
            file_get_contents(__DIR__ . '/output/07 - impossible triangle.txt')
        );
    }

    /**
     * Test that the code can be executed for "Alien".
     *
     * @group retroTypewriterArt_alien
     */
    public function testCanExecuteAlien(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - alien.txt',
            file_get_contents(__DIR__ . '/output/08 - alien.txt')
        );
    }

    /**
     * Test that the code can be executed for "Tree".
     *
     * @group retroTypewriterArt_tree
     */
    public function testCanExecuteTree(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/09 - tree.txt',
            file_get_contents(__DIR__ . '/output/09 - tree.txt')
        );
    }

    /**
     * Test that the code can be executed for "Flamingo fran".
     *
     * @group retroTypewriterArt_flamingoFran
     */
    public function testCanExecuteFlamingoFran(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/10 - flamingo fran.txt',
            file_get_contents(__DIR__ . '/output/10 - flamingo fran.txt')
        );
    }
}
