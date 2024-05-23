<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Parser;

use CyrilVerloop\Codingame\Configuration\TestConfiguration;
use CyrilVerloop\Codingame\Configuration\TestConfigurations;

/**
 * The configuration parser.
 */
final class ConfigurationParser
{
    // Methods :

    /**
     * Returns the configuration from the configuration file.
     * @param string $file the file.
     * @throws \RuntimeException if the configuration file is not readable.
     * @return \CyrilVerloop\Codingame\Parser\ParsedConfiguration the parsed configuration.
     */
    public function getConfigurationFromFile(string $file): ParsedConfiguration
    {
        if (is_readable($file) === false) {
            throw new \RuntimeException('fileNotReadable');
        }

        $fileContent = file_get_contents($file);
        /**
         * @var \stdClass $jsonConfiguration
         */
        $jsonConfiguration = json_decode($fileContent, false, flags: JSON_THROW_ON_ERROR);

        $this->validateConfiguration($jsonConfiguration);

        $testsconfigurations = $this->getTestConfigurations($jsonConfiguration->tests);

        $Configuration = new ParsedConfiguration(
            $jsonConfiguration->path,
            $jsonConfiguration->name,
            $jsonConfiguration->alphanumName,
            $jsonConfiguration->link,
            $testsconfigurations
        );

        return $Configuration;
    }

    /**
     * Checks if the configuration is valid.
     * @param \stdClass $configuration the configuration.
     * @throws \UnexpectedValueException if a value is not a string or array.
     */
    private function validateConfiguration(\stdClass $configuration): void
    {
        if (is_string($configuration->path) === false) {
            throw new \UnexpectedValueException('pathNotAString');
        }

        if (is_string($configuration->name) === false) {
            throw new \UnexpectedValueException('nameNotAString');
        }

        if (is_string($configuration->alphanumName) === false) {
            throw new \UnexpectedValueException('alphanumNameNotAString');
        }

        if (is_string($configuration->link) === false) {
            throw new \UnexpectedValueException('linkNotAString');
        }

        if (is_array($configuration->tests) === false) {
            throw new \UnexpectedValueException('testsNotAnArray');
        }

        $this->validateTestConfigurations($configuration->tests);
    }

    /**
     * Checks if the test configurations are valid.
     * @param \stdClass[] $testConfigurations the test configurations.
     * @throws \UnexpectedValueException if a value is not a string.
     */
    private function validateTestConfigurations(array $testConfigurations): void
    {
        foreach ($testConfigurations as $testConfiguration) {
            if (is_string($testConfiguration->name) === false) {
                throw new \UnexpectedValueException('testNameNotAString');
            }

            if (is_string($testConfiguration->alphanumName) === false) {
                throw new \UnexpectedValueException('testAlphanumNameNotAString');
            }

            if (is_string($testConfiguration->file) === false) {
                throw new \UnexpectedValueException('testFileNotAString');
            }
        }
    }

    /**
     * Returns the tests configurations.
     * @param \stdClass[] $testConfigurations the configurations.
     * @return \CyrilVerloop\Codingame\Configuration\TestConfigurations the tests configurations.
     */
    private function getTestConfigurations(array $testConfigurations): TestConfigurations
    {
        $testsconfigurations = new TestConfigurations();

        foreach ($testConfigurations as $testConfiguration) {
            $Testconfiguration = new TestConfiguration(
                $testConfiguration->name,
                $testConfiguration->alphanumName,
                $testConfiguration->file
            );
            $testsconfigurations->add($Testconfiguration);
        }

        return $testsconfigurations;
    }
}
