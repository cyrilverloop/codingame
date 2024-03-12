<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\ByTrainOrByCar;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\ByTrainOrByCar\ByTrainOrByCar;

/**
 * Tests for the "By train or by car ?" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\ByTrainOrByCar\ByTrainOrByCar
 * @group byTrainOrByCar
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new ByTrainOrByCar();
    }

    /**
     * Test that the code can be executed for "1) Example".
     *
     * @group byTrainOrByCar_example
     */
    public function testCanExecuteExample(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - example.txt',
            "TRAIN 2:39" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "2) No stop car first".
     *
     * @group byTrainOrByCar_noStopCarFirst
     */
    public function testCanExecuteNoStopCarFirst(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - no stop car first.txt',
            "CAR 1:00" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "3) no stop train first".
     *
     * @group byTrainOrByCar_noStopTrainFirst
     */
    public function testCanExecuteNoStopTrainFirst(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - no stop train first.txt',
            "TRAIN 4:13" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "4) Orléans Cholet".
     *
     * @group byTrainOrByCar_OrleansCholet
     */
    public function testCanExecuteOrleansCholet(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - Orléans Cholet.txt',
            "TRAIN 3:17" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "5) Orléans Nantes".
     *
     * @group byTrainOrByCar_OrleansNantes
     */
    public function testCanExecuteOrleansNantes(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - Orléans Nantes.txt',
            "TRAIN 4:00" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "6) Pithiviers Cholet".
     *
     * @group byTrainOrByCar_PithiviersCholet
     */
    public function testCanExecutePithiviersCholet(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - Pithiviers Cholet.txt',
            "TRAIN 3:43" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "7] Angouleme Royan".
     *
     * @group byTrainOrByCar_AngoulemeRoyan
     */
    public function testCanExecuteAngoulemeRoyan(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - Angouleme Royan.txt',
            "CAR 1:46" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "8) Montpellier Perpignan".
     *
     * @group byTrainOrByCar_MontpellierPerpignan
     */
    public function testCanExecuteMontpellierPerpignan(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - Montpellier Perpignan.txt',
            "CAR 2:27" . PHP_EOL
        );
    }
}
