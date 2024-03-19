<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Generator;

use CyrilVerloop\Codingame\Configuration\ConfigurationConvertor;
use CyrilVerloop\Codingame\Generator\CGCodeGenerator;
use CyrilVerloop\Codingame\Generator\CGTestGenerator;
use CyrilVerloop\Codingame\Parser\ConfigurationParser;

/**
 * Generates the tests.
 */
final class FilesGenerator
{
    // Constants :

    /**
     * The configuration file.
     */
    const CONFIG_FILE = 'config.json';

    /**
     * The default code file.
     */
    const DEFAULT_CODE_FILE = 'CGCode.dist';


    // Properties :

    /**
     * @var \CyrilVerloop\Codingame\Parser\ConfigurationParser the configuration parser.
     */
    private ConfigurationParser $configurationParser;

    /**
     * @var \CyrilVerloop\Codingame\Generator\CGCodeGenerator the code generator.
     */
    private CGCodeGenerator $codeGenerator;

    /**
     * @var \CyrilVerloop\Codingame\Generator\CGTestGenerator the test generator.
     */
    private CGTestGenerator $testGenerator;


    // Magic methods :

    /**
     * The constructor.
     * @param string $templatesPath the templates path.
     */
    public function __construct(string $templatesPath)
    {
        $this->configurationParser = new ConfigurationParser();
        $this->codeGenerator = new CGCodeGenerator($templatesPath);
        $this->testGenerator = new CGTestGenerator($templatesPath);
    }


    // Methods :

    /**
     * Generates the test files.
     * @param string $pathToScan the path to scan for a configuration file.
     * @param string $srcPath the equivalent path of $pathToScan in the src directory.
     * @param string $testPath the equivalent path of $pathToScan in the tests directory.
     */
    public function generate(
        string $pathToScan,
        string $srcPath,
        string $testPath
    ): void {
        /**
         * @var string[] $pathContent
         */
        $pathContent = array_diff(scandir($pathToScan), ['.', '..', 'input', 'output']);

        foreach ($pathContent as $element) {
            if (is_dir($pathToScan . $element) === true) {
                $this->generate(
                    $pathToScan . $element . DIRECTORY_SEPARATOR,
                    $srcPath . $element . DIRECTORY_SEPARATOR,
                    $testPath . $element . DIRECTORY_SEPARATOR
                );
            }

            if ($element === self::CONFIG_FILE) {
                $this->generateFilesForConfiguration(
                    $pathToScan,
                    $srcPath,
                    $testPath
                );
            }
        }
    }

    /**
     * Generates the files for the configuration.
     * @param string $configurationPath the path of the `config` directory.
     * @param string $srcPath the path where to generate the code.
     * @param string $testPath the path where to generate the test.
     */
    private function generateFilesForConfiguration(
        string $configurationPath,
        string $srcPath,
        string $testPath
    ): void {
        $parsedConfiguration = $this->configurationParser->getConfigurationFromFile($configurationPath . self::CONFIG_FILE);

        $codeConfiguration = ConfigurationConvertor::getGeneratorCodeConfiguration(
            $parsedConfiguration,
            $configurationPath . self::DEFAULT_CODE_FILE
        );
        $this->codeGenerator->generate(
            $codeConfiguration,
            $srcPath
        );

        $testConfiguration = ConfigurationConvertor::getGeneratorTestConfiguration($parsedConfiguration);
        $this->testGenerator->generate(
            $testConfiguration,
            $configurationPath,
            $testPath
        );
    }
}
