<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\CosmicLove;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\CosmicLove\CosmicLove;

/**
 * Tests for the "Cosmic love" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\CosmicLove\CosmicLove
 * @group cosmicLove
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new CosmicLove();
    }

    /**
     * Test that the code can be executed for "One haven".
     *
     * @group cosmicLove_oneHaven
     */
    public function testCanExecuteOneHaven(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - one haven.txt',
            "G7_24a" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Happy Alice".
     *
     * @group cosmicLove_happyAlice
     */
    public function testCanExecuteHappyAlice(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - happy Alice.txt',
            "Millers_Planet" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Hungry Alice".
     *
     * @group cosmicLove_hungryAlice
     */
    public function testCanExecuteHungryAlice(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - hungry Alice.txt',
            "CodinPlanet" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "So many options".
     *
     * @group cosmicLove_soManyOptions
     */
    public function testCanExecuteSoManyOptions(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - so many options.txt',
            "Gh2" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "The event horizon".
     *
     * @group cosmicLove_theEventHorizon
     */
    public function testCanExecuteTheEventHorizon(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - the event horizon.txt',
            "Supergiant_H59" . PHP_EOL
        );
    }
}
