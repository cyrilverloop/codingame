<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\SurveyPrediction;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Easy\SurveyPrediction\SurveyPrediction;

/**
 * Tests for the "Survey prediction" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\SurveyPrediction\SurveyPrediction
 * @group surveyPrediction
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new SurveyPrediction();
    }

    /**
     * Test that the code can be executed for "2 answers and 1 missing".
     *
     * @group surveyPrediction_2AnswersAnd1Missing
     */
    public function testCanExecute2AnswersAnd1Missing(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - 2 answers and 1 missing.txt',
            "hip-hop" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "5 answers and 3 missing".
     *
     * @group surveyPrediction_5AnswersAnd3Missing
     */
    public function testCanExecute5AnswersAnd3Missing(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - 5 answers and 3 missing.txt',
            file_get_contents(__DIR__ . '/output/02 - 5 answers and 3 missing.txt')
        );
    }

    /**
     * Test that the code can be executed for "Even answers and missing".
     *
     * @group surveyPrediction_evenAnswersAndMissing
     */
    public function testCanExecuteEvenAnswersAndMissing(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - even answers and missing.txt',
            file_get_contents(__DIR__ . '/output/03 - even answers and missing.txt')
        );
    }

    /**
     * Test that the code can be executed for "6 answers, 6 missing".
     *
     * @group surveyPrediction_6Answers6Missing
     */
    public function testCanExecute6Answers6Missing(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - 6 answers, 6 missing.txt',
            file_get_contents(__DIR__ . '/output/04 - 6 answers, 6 missing.txt')
        );
    }

    /**
     * Test that the code can be executed for "Everything none".
     *
     * @group surveyPrediction_everythingNone
     */
    public function testCanExecuteEverythingNone(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - everything none.txt',
            file_get_contents(__DIR__ . '/output/05 - everything none.txt')
        );
    }
}
