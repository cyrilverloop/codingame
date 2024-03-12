<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Tests;

use CyrilVerloop\Codingame\CGCodeInterface;
use PHPUnit\Framework\TestCase;

/**
 * Base class for testing code.
 */
abstract class CGTestCase extends TestCase
{
    // Properties :

    /**
     * @var \CyrilVerloop\Codingame\CGCodeInterface the code.
     */
    protected CGCodeInterface $cgCode;


    // Methods :

    /**
     * Expects `execute()` to output answer.
     * @param string $filename the file name.
     * @param string $expectedAnswer the expected answer.
     */
    protected function expectExecuteOutputAnswer(string $filename, string $expectedAnswer): void
    {
        $stdin = fopen($filename, 'r');

        $this->expectOutputString($expectedAnswer);

        $this->cgCode->execute($stdin);
    }
}
