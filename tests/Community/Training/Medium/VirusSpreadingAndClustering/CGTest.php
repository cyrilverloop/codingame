<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Medium\VirusSpreadingAndClustering;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Medium\VirusSpreadingAndClustering\VirusSpreadingAndClustering;

/**
 * Tests for the "Virus spreading and clustering" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Medium\VirusSpreadingAndClustering\VirusSpreadingAndClustering
 * @group virusSpreadingAndClustering
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new VirusSpreadingAndClustering();
    }

    /**
     * Test that the code can be executed for "5 items and 2 relationships".
     *
     * @group virusSpreadingAndClustering_5ItemsAnd2Relationships
     */
    public function testCanExecute5ItemsAnd2Relationships(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - 5 items and 2 relationships.txt',
            file_get_contents(__DIR__ . '/output/01 - 5 items and 2 relationships.txt')
        );
    }

    /**
     * Test that the code can be executed for "20 items and 6 relationships".
     *
     * @group virusSpreadingAndClustering_20ItemsAnd6Relationships
     */
    public function testCanExecute20ItemsAnd6Relationships(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - 20 items and 6 relationships.txt',
            file_get_contents(__DIR__ . '/output/02 - 20 items and 6 relationships.txt')
        );
    }

    /**
     * Test that the code can be executed for "100 items and 50 relationships".
     *
     * @group virusSpreadingAndClustering_100ItemsAnd50Relationships
     */
    public function testCanExecute100ItemsAnd50Relationships(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - 100 items and 50 relationships.txt',
            file_get_contents(__DIR__ . '/output/03 - 100 items and 50 relationships.txt')
        );
    }

    /**
     * Test that the code can be executed for "People has at least 1 connexion".
     *
     * @group virusSpreadingAndClustering_peopleHasAtLeast1Connexion
     */
    public function testCanExecutePeopleHasAtLeast1Connexion(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - people has at least 1 connexion.txt',
            file_get_contents(__DIR__ . '/output/04 - people has at least 1 connexion.txt')
        );
    }

    /**
     * Test that the code can be executed for "People has at least 2 connexion : argh !".
     *
     * @group virusSpreadingAndClustering_peopleHasAtLeast2ConnexionArgh
     */
    public function testCanExecutePeopleHasAtLeast2ConnexionArgh(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - people has at least 2 connexion : argh !.txt',
            "400 1" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "Average connexion 1 per people : argh !".
     *
     * @group virusSpreadingAndClustering_averageConnexion1PerPeopleArgh
     */
    public function testCanExecuteAverageConnexion1PerPeopleArgh(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - average connexion 1 per people : argh !.txt',
            file_get_contents(__DIR__ . '/output/06 - average connexion 1 per people : argh !.txt')
        );
    }

    /**
     * Test that the code can be executed for "Average connexion 0.8 per people".
     *
     * @group virusSpreadingAndClustering_averageConnexion08PerPeople
     */
    public function testCanExecuteAverageConnexion08PerPeople(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - average connexion 0.8 per people.txt',
            file_get_contents(__DIR__ . '/output/07 - average connexion 0.8 per people.txt')
        );
    }

    /**
     * Test that the code can be executed for "Average connexion 0.5 per people".
     *
     * @group virusSpreadingAndClustering_averageConnexion05PerPeople
     */
    public function testCanExecuteAverageConnexion05PerPeople(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - average connexion 0.5 per people.txt',
            file_get_contents(__DIR__ . '/output/08 - average connexion 0.5 per people.txt')
        );
    }
}
