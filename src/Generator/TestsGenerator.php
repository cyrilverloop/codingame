<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Generator;

/**
 * Generates the tests.
 */
final class TestsGenerator
{
    // Constants :

    /**
     * The configuration file.
     */
    const CONFIG_FILE = 'config.json';


    // Properties :

    /**
     * @var \CyrilVerloop\Codingame\Generator\CGConfigurationParser the configuration parser.
     */
    private CGConfigurationParser $configurationParser;

    /**
     * @var \CyrilVerloop\Codingame\Generator\TestGenerator the test generator.
     */
    private TestGenerator $testGenerator;


    // Magic methods :

    /**
     * The constructor.
     * @param \CyrilVerloop\Codingame\Generator\CGConfigurationParser $configurationParser the configuration parser.
     * @param \CyrilVerloop\Codingame\Generator\TestGenerator $testGenerator the test generator.
     */
    public function __construct(
        CGConfigurationParser $configurationParser,
        TestGenerator $testGenerator
    ) {
        $this->configurationParser = $configurationParser;
        $this->testGenerator = $testGenerator;
    }


    // Methods :

    /**
     * Generates the test files.
     * @param string $path the path.
     */
    public function generate(string $path): void
    {
        $pathContent = array_diff(scandir($path), ['.', '..']);

        foreach ($pathContent as $element) {
            if (is_dir($path . $element) === true) {
                $this->generate($path . $element . DIRECTORY_SEPARATOR);
            }

            if ($element === self::CONFIG_FILE) {
                $puzzleConfiguration = $this->configurationParser->getCGConfigurationFromFile($path . $element);
                $this->testGenerator->generate($puzzleConfiguration, $path);
            }
        }
    }
}
