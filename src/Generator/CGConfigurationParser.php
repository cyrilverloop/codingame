<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Generator;

/**
 * The configuration parser.
 */
final class CGConfigurationParser
{
    // Methods :

    /**
     * Returns the CG configuration from the configuration file.
     * @param string $file the file.
     * @throws \RuntimeException if the configuration file is not readable.
     * @return \CyrilVerloop\Codingame\Generator\CGConfiguration the CG configuration from the configuration file.
     */
    public function getCGConfigurationFromFile(string $file): CGConfiguration
    {
        if (is_readable($file) === false) {
            throw new \RuntimeException('fileNotExist');
        }

        $fileContent = file_get_contents($file);
        $jsonConfiguration = json_decode($fileContent, false);

        $this->validateConfiguration($jsonConfiguration);

        $CGTestsconfigurations = $this->getCGTestConfigurations($jsonConfiguration->tests);

        $CGConfiguration = new CGConfiguration(
            $jsonConfiguration->namespace,
            $jsonConfiguration->name,
            $jsonConfiguration->group,
            $jsonConfiguration->link,
            $CGTestsconfigurations
        );

        return $CGConfiguration;
    }

    /**
     * Checks if the configuration is valid.
     * @param \stdClass $configuration the configuration.
     * @throws \RuntimeException if a key is missing.
     * @throws \UnexpectedValueException if a value is not a string or array.
     */
    private function validateConfiguration(\stdClass $configuration): void
    {
        if(is_string($configuration->namespace) === false) {
            throw new \UnexpectedValueException('namespaceNotAString');
        }

        if(is_string($configuration->name) === false) {
            throw new \UnexpectedValueException('nameNotAString');
        }

        if(is_string($configuration->group) === false) {
            throw new \UnexpectedValueException('groupNotAString');
        }

        if(is_string($configuration->link) === false) {
            throw new \UnexpectedValueException('linkNotAString');
        }

        if(is_array($configuration->tests) === false) {
            throw new \UnexpectedValueException('testsNotAnArray');
        }

        $this->validateTestConfigurations($configuration->tests);
    }

    /**
     * Checks if the test configurations are valid.
     * @param \stdClass[] $testConfigurations the test configurations.
     * @throws \RuntimeException if a key is missing.
     * @throws \UnexpectedValueException if a value is not a string or array.
     */
    private function validateTestConfigurations(array $testConfigurations): void
    {
        foreach($testConfigurations as $testConfiguration) {

            if(is_string($testConfiguration->name) === false) {
                throw new \UnexpectedValueException('testNameNotAString');
            }

            if(is_string($testConfiguration->group) === false) {
                throw new \UnexpectedValueException('testGroupNotAString');
            }

            if(is_string($testConfiguration->method) === false) {
                throw new \UnexpectedValueException('testMethodNotAString');
            }

            if(is_string($testConfiguration->file) === false) {
                throw new \UnexpectedValueException('testFileNotAString');
            }
        }
    }

    /**
     * Returns the CG tests configurations.
     * @param \stdClass[] $testConfigurations the configurations.
     * @return CGTestConfigurations the CG tests configurations.
     */
    private function getCGTestConfigurations(array $testConfigurations): CGTestConfigurations
    {
        $CGTestsconfigurations = new CGTestConfigurations();

        foreach ($testConfigurations as $testConfiguration) {
            $CGTestconfiguration = new CGTestConfiguration(
                $testConfiguration->name,
                $testConfiguration->group,
                $testConfiguration->method,
                $testConfiguration->file
            );
            $CGTestsconfigurations->add($CGTestconfiguration);
        }

        return $CGTestsconfigurations;
    }
}
