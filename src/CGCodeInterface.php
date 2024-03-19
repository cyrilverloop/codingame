<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame;

/**
 * A base interface for code.
 */
interface CGCodeInterface
{
    /**
     * Execute the code.
     * @param resource $stdin the resource to get the datas from.
     */
    public function execute($stdin): void;
}
