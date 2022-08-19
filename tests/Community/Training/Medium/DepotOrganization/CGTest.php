<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\DepotOrganization;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Medium\DepotOrganization\DepotOrganization;

/**
 * Tests for the "Depot organization" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\DepotOrganization\DepotOrganization
 * @group depotOrganization
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new DepotOrganization();
    }

    /**
     * Test that the code can be executed for "Example case".
     *
     * @group depotOrganization_exampleCase
     */
    public function testCanExecuteAllBulls(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - example case.txt',
            "4K 1X 2R 6C 5G 0J 3C" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Easy ring".
     *
     * @group depotOrganization_easyRing
     */
    public function testCanEasyRing(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - easy ring.txt',
            "3C 2U 4X 0H 1Y 5F 6Q" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Assorted ring".
     *
     * @group depotOrganization_assortedRing
     */
    public function testCanAssortedRing(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - assorted ring.txt',
            "5M 2P 6R 3B 0E 4H 1J" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Random case".
     *
     * @group depotOrganization_randomCase
     */
    public function testCanRandomCase(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - random case.txt',
            "0V 1M 6K 2D 3F 5G 4B" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Random case, very hard".
     *
     * @group depotOrganization_randomCaseVeryHard
     */
    public function testCanRandomCaseVeryHard(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - random case, very hard.txt',
            "0A 1C 2V 3C 4E 5D 6O" . PHP_EOL
        );
    }
}
