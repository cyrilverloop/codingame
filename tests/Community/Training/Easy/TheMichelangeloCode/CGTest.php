<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\TheMichelangeloCode;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Easy\TheMichelangeloCode\TheMichelangeloCode;

/**
 * Tests for the "The michelangelo code" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\TheMichelangeloCode\TheMichelangeloCode
 * @group theMichelangeloCode
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new TheMichelangeloCode();
    }

    /**
     * Test that the code can be executed for "Simple".
     *
     * @group theMichelangeloCode_simple
     */
    public function testCanExecuteSimple(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - simple.txt',
            "SomEwaCkyRunEsaT" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Where to begin".
     *
     * @group theMichelangeloCode_whereToBegin
     */
    public function testCanExecuteWhereToBegin(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - where to begin.txt',
            "ThertisnoblerinthemindtosuffeRtheslingsandarrowsofoutrageoUsfortuneortotakearmsagainstaSeaoftroublesandbyopposingendT" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Be punctual".
     *
     * @group theMichelangeloCode_bePunctual
     */
    public function testCanExecuteBePunctual(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - be punctual.txt',
            "ErskeeperandthefinderofLostchildrenandiwillstrIkedownupontheewithgreaTvengeanceandfuriousangE" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Tempus fugit".
     *
     * @group theMichelangeloCode_tempusFugit
     */
    public function testCanExecuteTempusFugit(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - tempus fugit.txt',
            "IpiscingeLitnullamLonefficiUtrquamegMtullamcoIpervelitNuspendisAesedmaleTuadadiamI" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "I have no mouth".
     *
     * @group theMichelangeloCode_iHaveNoMouth
     */
    public function testCanExecuteIHaveNoMouth(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - i have no mouth.txt',
            "HaEaLaP" . PHP_EOL
        );
    }
}
