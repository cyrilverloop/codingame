<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\PersonalBest;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Easy\PersonalBest\PersonalBest;

/**
 * Tests for the "Personal best" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\PersonalBest\PersonalBest
 * @group personalBest
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new PersonalBest();
    }

    /**
     * Test that the code can be executed for "Single gymnast, single record".
     *
     * @group personalBest_singleGymnastSingleRecord
     */
    public function testCanExecuteSingleGymnastSingleRecord(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - single gymnast, single record.txt',
            9 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Single gymnast, multiple records".
     *
     * @group personalBest_singleGymnastMultipleRecords
     */
    public function testCanExecuteSingleGymnastMultipleRecords(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - single gymnast, multiple records.txt',
            8.3 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Single gymnast, multiple names".
     *
     * @group personalBest_singleGymnastMultipleNames
     */
    public function testCanExecuteSingleGymnastMultipleNames(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - single gymnast, multiple names.txt',
            8.57 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Multiple gymnasts, single category, multiple competitions".
     *
     * @group personalBest_multipleGymnastsSingleCategoryMultipleCompetitions
     */
    public function testCanExecuteMultipleGymnastsSingleCategoryMultipleCompetitions(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - multiple gymnasts, single category, multiple competitions.txt',
            file_get_contents(__DIR__ . '/output/04 - multiple gymnasts, single category, multiple competitions.txt')
        );
    }

    /**
     * Test that the code can be executed for "Multiple gymnasts, multiple categories, multiple competitions".
     *
     * @group personalBest_multipleGymnastsMultipleCategoriesMultipleCompetitions
     */
    public function testCanExecuteMultipleGymnastsMultipleCategoriesMultipleCompetitions(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - multiple gymnasts, multiple categories, multiple competitions.txt',
            file_get_contents(__DIR__ . '/output/05 - multiple gymnasts, multiple categories, multiple competitions.txt')
        );
    }
}
