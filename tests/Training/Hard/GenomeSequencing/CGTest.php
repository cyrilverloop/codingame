<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Training\Hard\GenomeSequencing;

use CyrilVerloop\Codingame\Tests\PuzzleTestCase;
use CyrilVerloop\Codingame\Training\Hard\GenomeSequencing\GenomeSequencing;

/**
 * Tests for the "Genome sequencing" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Training\Hard\GenomeSequencing\GenomeSequencing
 * @group genomeSequencing
 * @medium
 */
final class CGTest extends PuzzleTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new GenomeSequencing();
    }

    /**
     * Test that the code can be executed for "AACCTT".
     *
     * @group genomeSequencing_AACCTT
     */
    public function testCanExecuteAACCTT(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - AACCTT.txt',
            6 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "AGATTACAGA".
     *
     * @group genomeSequencing_AGATTACAGA
     */
    public function testCanExecuteAGATTACAGA(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - AGATTACAGA.txt',
            10 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "AACTT".
     *
     * @group genomeSequencing_AACTT
     */
    public function testCanExecuteAACTT(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - AACTT.txt',
            5 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "AGATTA".
     *
     * @group genomeSequencing_AGATTA
     */
    public function testCanExecuteAGATTA(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - AGATTA.txt',
            6 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Reversed AGATTA".
     *
     * @group genomeSequencing_reversedAGATTA
     */
    public function testCanExecuteReversedAGATTA(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - reversed AGATTA.txt',
            6 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "ATCG".
     *
     * @group genomeSequencing_ATCG
     */
    public function testCanExecuteReversedATCG(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - ATCG.txt',
            4 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "CCCTGACATGA".
     *
     * @group genomeSequencing_CCCTGACATGA
     */
    public function testCanExecuteCCCTGACATGA(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - CCCTGACATGA.txt',
            11 . PHP_EOL
        );
    }
}
