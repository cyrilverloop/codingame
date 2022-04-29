<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests\Community\Training\Easy\BracketsExtremeEdition;

use CyrilVerloop\Codingame\Tests\PuzzleTest;
use CyrilVerloop\Codingame\Community\Training\Easy\BracketsExtremeEdition\BracketsExtremeEdition;

/**
 * Tests for the "Brackets, extreme edition" puzzle.
 *
 * @covers \CyrilVerloop\Codingame\Community\Training\Easy\BracketsExtremeEdition\BracketsExtremeEdition
 * @group bracketsExtremeEdition
 * @medium
 */
final class CGTest extends PuzzleTest
{
    public function setUp(): void
    {
        $this->puzzle = new BracketsExtremeEdition();
    }

    /**
     * Test that the code can be executed for "Example".
     *
     * @group bracketsExtremeEdition_example
     */
    public function testCanExecuteExample(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/01 - example.txt',
            "true" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "{([{S}]]6K[()]}".
     *
     * @group bracketsExtremeEdition_S6K
     */
    public function testCanExecuteS6K(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/02 - {([{S}]]6K[()]}.txt',
            "false" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "{C{}[{[a]}RqhL]{y2}}".
     *
     * @group bracketsExtremeEdition_CaRqhLy2
     */
    public function testCanExecuteCaRqhLy2(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/03 - {C{}[{[a]}RqhL]{y2}}.txt',
            "true" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "W12{}{}L{}".
     *
     * @group bracketsExtremeEdition_W12L
     */
    public function testCanExecuteW12L(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/04 - W12{}{}L{}.txt',
            "true" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "h{Pn{GT{h}(c))}".
     *
     * @group bracketsExtremeEdition_hPnGThc
     */
    public function testCanExecutehPnGThc(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/05 - h{Pn{GT{h}(c))}.txt',
            "false" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "{[{iHTSc}]}p(R)m(){q({})".
     *
     * @group bracketsExtremeEdition_iHTScpRmq
     */
    public function testCanExecutehiHTScpRmq(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/06 - {[{iHTSc}]}p(R)m(){q({}).txt',
            "false" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "][".
     *
     * @group bracketsExtremeEdition_7
     */
    public function testCanExecuteh7(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/07 - ][.txt',
            "false" . PHP_EOL
        );
    }

    /**
     * Test that the code can be executed for "{(})".
     *
     * @group bracketsExtremeEdition_8
     */
    public function testCanExecuteh8(): void
    {
        $this->expectExecuteOutputAnswer(
            __DIR__ . '/input/08 - {(}).txt',
            "false" . PHP_EOL
        );
    }
}
