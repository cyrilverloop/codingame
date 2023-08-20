<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\CropCircles;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\CropCircles\CropCircles;

/**
 * Tests for the "Crop-circles" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\CropCircles\CropCircles
 * @group cropCircles
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new CropCircles();
    }

    /**
     * Test that the code can be executed for "Basic".
     *
     * @group cropCircles_basic
     */
    public function testCanExecuteBasic(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - basic.txt',
            file_get_contents(__DIR__ . '/output/01 - basic.txt')
        );
    }

    /**
     * Test that the code can be executed for "We are not alone".
     *
     * @group cropCircles_weAreNotAlone
     */
    public function testCanExecuteWeAreNotAlone(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - we are not alone.txt',
            file_get_contents(__DIR__ . '/output/02 - we are not alone.txt')
        );
    }

    /**
     * Test that the code can be executed for "Classic with PLANT".
     *
     * @group cropCircles_classicWithPLANT
     */
    public function testCanExecuteClassicWithPLANT(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - classic with PLANT.txt',
            file_get_contents(__DIR__ . '/output/03 - classic with PLANT.txt')
        );
    }

    /**
     * Test that the code can be executed for "Bulls eye".
     *
     * @group cropCircles_bullsEye
     */
    public function testCanExecuteBullsEye(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - bulls eye.txt',
            file_get_contents(__DIR__ . '/output/04 - bulls eye.txt')
        );
    }

    /**
     * Test that the code can be executed for "PLANTMOW".
     *
     * @group cropCircles_PLANTMOW
     */
    public function testCanExecutePLANTMOW(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - PLANTMOW.txt',
            file_get_contents(__DIR__ . '/output/05 - PLANTMOW.txt')
        );
    }

    /**
     * Test that the code can be executed for "A person".
     *
     * @group cropCircles_aPerson
     */
    public function testCanExecuteAPerson(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - a person.txt',
            file_get_contents(__DIR__ . '/output/06 - a person.txt')
        );
    }

    /**
     * Test that the code can be executed for "Half moons".
     *
     * @group cropCircles_halfMoons
     */
    public function testCanExecuteHalfMoons(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - half moons.txt',
            file_get_contents(__DIR__ . '/output/07 - half moons.txt')
        );
    }

    /**
     * Test that the code can be executed for "Bonus".
     *
     * @group cropCircles_bonus
     */
    public function testCanExecuteBonus(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - bonus.txt',
            file_get_contents(__DIR__ . '/output/08 - bonus.txt')
        );
    }

    /**
     * Test that the code can be executed for "Single".
     *
     * @group cropCircles_single
     */
    public function testCanExecuteSingle(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/09 - single.txt',
            file_get_contents(__DIR__ . '/output/09 - single.txt')
        );
    }

    /**
     * Test that the code can be executed for "Venn diagram".
     *
     * @group cropCircles_vennDiagram
     */
    public function testCanExecuteVennDiagram(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/10 - venn diagram.txt',
            file_get_contents(__DIR__ . '/output/10 - venn diagram.txt')
        );
    }

    /**
     * Test that the code can be executed for "That was excessive".
     *
     * @group cropCircles_thatWasExcessive
     */
    public function testCanExecuteThatWasExcessive(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/11 - that was excessive.txt',
            file_get_contents(__DIR__ . '/output/11 - that was excessive.txt')
        );
    }

    /**
     * Test that the code can be executed for "Why am i even here ?".
     *
     * @group cropCircles_whyAmIEvenHere
     */
    public function testCanExecuteWhyAmIEvenHere(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/12 - why am i even here ?.txt',
            file_get_contents(__DIR__ . '/output/12 - why am i even here ?.txt')
        );
    }
}
