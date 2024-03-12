<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\ParseSQLQueries;

use CyrilVerloop\Codingame\Tests\CGTestCase;
use CyrilVerloop\Codingame\Community\Training\Easy\ParseSQLQueries\ParseSQLQueries;

/**
 * Tests for the "Parse SQL queries" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\ParseSQLQueries\ParseSQLQueries
 * @group parseSQLQueries
 * @medium
 */
final class CGTest extends CGTestCase
{
    public function setUp(): void
    {
        $this->puzzle = new ParseSQLQueries();
    }

    /**
     * Test that the code can be executed for "Select all".
     *
     * @group parseSQLQueries_selectAll
     */
    public function testCanExecuteSelectAll(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - select all.txt',
            file_get_contents(__DIR__ . '/output/01 - select all.txt')
        );
    }

    /**
     * Test that the code can be executed for "Select from where".
     *
     * @group parseSQLQueries_selectFromWhere
     */
    public function testCanExecuteSelectFromWhere(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - select from where.txt',
            file_get_contents(__DIR__ . '/output/02 - select from where.txt')
        );
    }

    /**
     * Test that the code can be executed for "ORDER BY DESC".
     *
     * @group parseSQLQueries_ORDERBYDESC
     */
    public function testCanExecuteORDERBYDESC(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - ORDER BY DESC.txt',
            file_get_contents(__DIR__ . '/output/03 - ORDER BY DESC.txt')
        );
    }

    /**
     * Test that the code can be executed for "Slightly bigger table".
     *
     * @group parseSQLQueries_slightlyBiggerTable
     */
    public function testCanExecuteSlightlyBiggerTable(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - slightly bigger table.txt',
            file_get_contents(__DIR__ . '/output/04 - slightly bigger table.txt')
        );
    }

    /**
     * Test that the code can be executed for "Titanic table".
     *
     * @group parseSQLQueries_titanicTable
     */
    public function testCanExecuteTitanicTable(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - titanic table.txt',
            file_get_contents(__DIR__ . '/output/05 - titanic table.txt')
        );
    }
}
