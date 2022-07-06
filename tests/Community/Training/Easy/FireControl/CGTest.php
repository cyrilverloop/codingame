<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\FireControl;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Easy\FireControl\FireControl;

/**
 * Tests for the "Fire control" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\FireControl\FireControl
 * @group fireControl
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new FireControl();
    }

    /**
     * Test that the code can be executed for "Side-fire".
     *
     * @group fireControl_sideFire
     */
    public function testCanExecuteSideFire(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - side-fire.txt',
            12 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Who cut those?".
     *
     * @group fireControl_whoCutThose
     */
    public function testCanExecuteWhoCutThose(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - who cut those?.txt',
            6 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Should i plant some trees?".
     *
     * @group fireControl_shouldIPlantSomeTrees
     */
    public function testCanExecuteShouldIPlantSomeTrees(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - should I plant some trees?.txt',
            "JUST RUN" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Random centre".
     *
     * @group fireControl_randomCentre
     */
    public function testCanExecuteRandomCentre(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - random centre.txt',
            24 . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Trees???".
     *
     * @group fireControl_trees
     */
    public function testCanExecuteTrees(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - trees???.txt',
            "JUST RUN" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Just RUN".
     *
     * @group fireControl_JustRUN
     */
    public function testCanExecuteJustRUN(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - Just RUN.txt',
            "JUST RUN" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Who plant THIS???".
     *
     * @group fireControl_whoPlantTHIS
     */
    public function testCanExecuteWhoPlantTHIS(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - who plant THIS???.txt',
            "JUST RUN" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "False alarm".
     *
     * @group fireControl_falseAlarm
     */
    public function testCanExecuteFalseAlarm(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - false alarm.txt',
            "RELAX" . PHP_EOL
        );
    }
}
