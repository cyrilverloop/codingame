<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Generator;

use Twig\Environment;

/**
 * Generates the test.
 */
final class TestGenerator
{
    // Properties :

    /**
     * @var \Twig\Environment twig.
     */
    private Environment $twig;


    // Magic methods :

    /**
     * The constructor.
     * @param \Twig\Environment $twig twig.
     */
    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }


    // Methods :

    /**
     * Generates the test.
     * @param \CyrilVerloop\Codingame\Generator\CGConfiguration $configuration the configuration.
     * @param string $path the path where to put the test.
     */
    public function generate(CGConfiguration $configuration, string $path): void
    {
        $templateVars = [
            'configuration' => $configuration
        ];
        $testContent = $this->twig->render('CGTest.twig', $templateVars);

        file_put_contents($path . 'CGTest.php', $testContent);
    }
}
