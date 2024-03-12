<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\Lumen;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\Lumen\Lumen;

/**
 * Tests for the "Lumen" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\Lumen\Lumen
 * @group lumen
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new Lumen();
    }

    /**
     * Test that the code can be executed for "THEY only have one candle".
     *
     * @group lumen_theyOnlyHaveOneCandle
     */
    public function testCanExecuteTheyOnlyHaveOneCandle(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - THEY only have one candle.txt',
            9 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "THEY are doing a ritual".
     *
     * @group lumen_theyAreDoingARitual
     */
    public function testCanExecuteTheyAreDoingARitual(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - THEY are doing a ritual.txt',
            0 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "THEY have a large pit".
     *
     * @group lumen_theyHaveALargePit
     */
    public function testCanExecuteTheyHaveALargePit(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - THEY have a large pit.txt',
            2 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "THEY have a small cellar".
     *
     * @group lumen_theyHaveASmallCellar
     */
    public function testCanExecuteTheyHaveASmallCellar(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - THEY have a small cellar.txt',
            4 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "THEY have a medium cellar".
     *
     * @group lumen_theyHaveAMediumCellar
     */
    public function testCanExecuteTheyHaveAMediumCellar(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - THEY have a medium cellar.txt',
            14 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "THEY have a large cellar".
     *
     * @group lumen_theyHaveALargeCellar
     */
    public function testCanExecuteTheyHaveALargeCellar(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - THEY have a large cellar.txt',
            34 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "THEY are not very smart".
     *
     * @group lumen_theyAreNotVerySmart
     */
    public function testCanExecuteTheyAreNotVerySmart(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - THEY are not very smart.txt',
            9 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "THEY have a great hall".
     *
     * @group lumen_theyHaveAGreatHall
     */
    public function testCanExecuteTheyHaveAGreatHall(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - THEY have a great hall.txt',
            90 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Not Euclidean".
     *
     * @group lumen_notEuclidean
     */
    public function testCanExecuteNotEuclidean(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/09 - Not Euclidean.txt',
            9 . PHP_EOL
        );
    }
}
