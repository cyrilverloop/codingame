<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\A\Name\Space;

use CyrilVerloop\Codingame\CGCodeInterface;

/**
 * The "A name" CGCodeInterface.
 * @link https://a-link
 */
class CGCode implements CGCodeInterface
{
    public function execute($stdin): void
    {
        fscanf($stdin, "%d", $L);

        echo("answer\n");
    }
}
