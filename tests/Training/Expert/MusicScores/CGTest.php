<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Training\Expert\MusicScores;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Training\Expert\MusicScores\MusicScores;

/**
 * Tests for the "MusicScores" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Training\Expert\MusicScores\MusicScores
 * @group musicScores
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new MusicScores();
    }

    /**
     * Test that the code can be executed for "One quarter note between lines".
     *
     * @group musicScores_oneQuarterNoteBetweenLines
     */
    public function testCanExecuteOneQuarterNoteBetweenLines(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - one quarter note between lines.txt',
            "AQ" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "One quarter note on a line".
     *
     * @group musicScores_oneQuarterNoteOnALine
     */
    public function testCanExecuteOneQuarterNoteOnALine(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - one quarter note on a line.txt',
            "BQ" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "One half note between lines".
     *
     * @group musicScores_oneHalfNoteBetweenLines
     */
    public function testCanExecuteOneHalfNoteBetweenLines(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - one half note between lines.txt',
            "AH" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "One half note on a line".
     *
     * @group musicScores_oneHalfNoteOnALine
     */
    public function testCanExecuteOneHalfNoteOnALine(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - one half note on a line.txt',
            "BH" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Only quarter notes without lower C".
     *
     * @group musicScores_onlyQuarterNotesWithoutLowerC
     */
    public function testCanExecuteOnlyQuarterNotesWithoutLowerC(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - only quarter notes without lower C.txt',
            "CQ CQ CQ CQ DQ EQ CQ AQ" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Only half notes without lower C".
     *
     * @group musicScores_onlyHalfNotesWithoutLowerC
     */
    public function testCanExecuteOnlyHalfNotesWithoutLowerC(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - only half notes without lower C.txt',
            "DH EH FH AH CH EH DH" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Scale half and quarter notes".
     *
     * @group musicScores_scalehalfAndQuarterNotes
     */
    public function testCanExecuteScalehalfAndQuarterNotes(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - scale half and quarter notes.txt',
            "EQ FH GQ AH BQ CH DQ EH FQ" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Lower C".
     *
     * @group musicScores_lowerC
     */
    public function testCanExecuteLowerC(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - lower C.txt',
            "CQ CQ CQ DQ EH DH CQ EQ DQ DQ CH" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Very close".
     *
     * @group musicScores_veryClose
     */
    public function testCanExecuteVeryClose(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/09 - very close.txt',
            "BQ CH DH EH FQ GQ GQ BQ DH BQ" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Only 1 pixel wide".
     *
     * @group musicScores_only1PixelWide
     */
    public function testCanExecuteOnly1PixelWide(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/10 - Only 1 pixel wide.txt',
            "BQ CH DH EH FQ GQ GQ BQ DH BQ BQ CH DH EH FQ GQ GQ BQ DH BQ" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Doctor Who theme".
     *
     * @group musicScores_doctorWhoTheme
     */
    public function testCanExecuteDoctorWhoTheme(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/11 - doctor Who theme.txt',
            file_get_contents(__DIR__ . '/output/11 - doctor Who theme.txt')
        );
    }

    /**
     * Test that the code can be executed for "Random".
     *
     * @group musicScores_random
     */
    public function testCanExecuteRandom(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/12 - random.txt',
            file_get_contents(__DIR__ . '/output/12 - random.txt')
        );
    }
}
