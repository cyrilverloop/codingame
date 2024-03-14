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
     * Returns the puzzle configuration from the configuration file.
     * @param string $file the file.
     * @throws \RuntimeException if the configuration file is not readable.
     * @return \CyrilVerloop\Codingame\Generator\CGConfiguration the puzzle configuration from the configuration file.
     */
    public function getCGConfigurationFromFile(string $file): CGConfiguration
    {
        if (is_readable($file) === false) {
            throw new \RuntimeException('fileNotExist');
        }

        $fileContent = file_get_contents($file);
        $jsonConfiguration = json_decode($fileContent, false);

        $puzzleTestsconfigurations = $this->getCGTestConfigurations($jsonConfiguration->tests);

        $puzzleConfiguration = new CGConfiguration(
            $jsonConfiguration->namespace,
            $jsonConfiguration->name,
            $jsonConfiguration->group,
            $jsonConfiguration->link,
            $puzzleTestsconfigurations
        );

        return $puzzleConfiguration;
    }

    /**
     * Returns the puzzle tests configurations.
     * @param array $configurations the configurations.
     * @return CGTestConfigurations the puzzle tests configurations.
     */
    private function getCGTestConfigurations(array $configurations): CGTestConfigurations
    {
        $puzzleTestsconfigurations = new CGTestConfigurations();

        foreach ($configurations as $configuration) {
            $puzzleTestconfiguration = new CGTestConfiguration(
                $configuration->name,
                $configuration->group,
                $configuration->method,
                $configuration->file
            );
            $puzzleTestsconfigurations->add($puzzleTestconfiguration);
        }

        return $puzzleTestsconfigurations;
    }
}
