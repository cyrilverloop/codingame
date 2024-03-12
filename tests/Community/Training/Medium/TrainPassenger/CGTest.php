<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\TrainPassenger;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\TrainPassenger\TrainPassenger;

/**
 * Tests for the "Train passenger" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\TrainPassenger\TrainPassenger
 * @group trainPassenger
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new TrainPassenger();
    }

    /**
     * Test that the code can be executed for "Simple A to B".
     *
     * @group trainPassenger_simpleAToB
     */
    public function testCanExecuteSimpleAToB(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - simple A to B.txt',
            "A > B" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "More stations".
     *
     * @group trainPassenger_moreStations
     */
    public function testCanExecuteMoreStations(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - more stations.txt',
            "E > G > D" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Even more stations".
     *
     * @group trainPassenger_evenMoreStations
     */
    public function testCanExecuteEvenMoreStations(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - even more stations.txt',
            "A > B > C > D > E > F > G > H > I > J > K > L > M > N > O > P > Q > R > S > T > U > V > W > X > Y > Z" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Not in correct order".
     *
     * @group trainPassenger_notInCorrectOrder
     */
    public function testCanExecuteNotInCorrectOrder(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - not in correct order.txt',
            "A > B > C > D > E" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Complex names".
     *
     * @group trainPassenger_complexNames
     */
    public function testCanExecuteComplexNames(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - complex names.txt',
            "BestStation > MediumStation > WorstStation" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Complex stations links".
     *
     * @group trainPassenger_complexStationsLinks
     */
    public function testCanExecuteComplexStationsLinks(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - complex stations links.txt',
            "A > R > P > V > S > D > F" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Complete test".
     *
     * @group trainPassenger_completeTest
     */
    public function testCanExecuteCompleteTest(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - complete test.txt',
            "ByTheWay > ILoveCoding > But > ImBadAtCoding" . PHP_EOL
        );
    }
}
