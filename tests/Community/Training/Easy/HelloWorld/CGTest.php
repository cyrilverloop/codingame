<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\HelloWorld;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\HelloWorld\HelloWorld;

/**
 * Tests for the "Hello, world!" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\HelloWorld\HelloWorld
 * @group helloWorld
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new HelloWorld();
    }

    /**
     * Test that the code can be executed for "Dualism".
     *
     * @group helloWorld_dualism
     */
    public function testCanExecuteDualism(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - dualism.txt',
            file_get_contents(__DIR__ . '/output/01 - dualism.txt')
        );
    }

    /**
     * Test that the code can be executed for "Border travels in TriTheatreLand".
     *
     * @group helloWorld_borderTravelsInTriTheatreLand
     */
    public function testCanExecuteBorderTravelsInTriTheatreLand(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - border travels in TriTheatreLand.txt',
            file_get_contents(__DIR__ . '/output/02 - border travels in TriTheatreLand.txt')
        );
    }

    /**
     * Test that the code can be executed for "CodinGame world".
     *
     * @group helloWorld_CodinGameWorld
     */
    public function testCanExecuteCodinGameWorld(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - CodinGame world.txt',
            file_get_contents(__DIR__ . '/output/03 - CodinGame world.txt')
        );
    }

    /**
     * Test that the code can be executed for "Lonely planet".
     *
     * @group helloWorld_lonelyPlanet
     */
    public function testCanExecuteLonelyPlanet(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - lonely planet.txt',
            "Hello, Earth!" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Roundtrip in Europe".
     *
     * @group helloWorld_roundtripInEurope
     */
    public function testCanExecuteRoundtripInEurope(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - roundtrip in Europe.txt',
            file_get_contents(__DIR__ . '/output/05 - roundtrip in Europe.txt')
        );
    }

    /**
     * Test that the code can be executed for "Pole to pole with Michael Palin".
     *
     * @group helloWorld_poleToPoleWithMichaelPalin
     */
    public function testCanExecutePoleToPoleWithMichaelPalin(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - pole to Pole with Michael Palin.txt',
            file_get_contents(__DIR__ . '/output/06 - pole to Pole with Michael Palin.txt')
        );
    }
}
