<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Generator;

use Twig\Environment;
use Twig\Loader\FilesystemLoader;

/**
 * the generator base class.
 */
abstract class FileGenerator
{
    // Properties :

    /**
     * @var \Twig\Environment twig.
     */
    protected Environment $twig;


    // Magic methods :

    /**
     * The constructor.
     * @param string $templatePath the template path.
     */
    public function __construct(string $templatePath)
    {
        $loader = new FilesystemLoader($templatePath);
        $this->twig = new Environment($loader);
    }
}
