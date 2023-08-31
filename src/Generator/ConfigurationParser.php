<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Generator;

/**
 * The configuration parser.
 */
final class ConfigurationParser
{
    // Methods :

    /**
     * Returns the puzzle configuration from the configuration file.
     * @param string $file the file.
     * @throws \RuntimeException if the configuration file is not readable.
     * @return \CyrilVerloop\Codingame\Generator\PuzzleConfiguration the puzzle configuration from the configuration file.
     */
    public function getPuzzleConfigurationFromFile(string $file): PuzzleConfiguration
    {
        if (is_readable($file) === false) {
            throw new \RuntimeException('fileNotExist');
        }

        $fileContent = file_get_contents($file);
        $jsonConfiguration = json_decode($fileContent, false);

        $puzzleTestsconfigurations = $this->getPuzzleTestConfigurations($jsonConfiguration->tests);

        $puzzleConfiguration = new PuzzleConfiguration(
            $jsonConfiguration->namespace,
            $jsonConfiguration->class,
            $jsonConfiguration->name,
            $jsonConfiguration->group,
            $puzzleTestsconfigurations
        );

        return $puzzleConfiguration;
    }

    /**
     * Returns the puzzle tests configurations.
     * @param array $configurations the configurations.
     * @return PuzzleTestConfigurations the puzzle tests configurations.
     */
    private function getPuzzleTestConfigurations(array $configurations): PuzzleTestConfigurations
    {
        $puzzleTestsconfigurations = new PuzzleTestConfigurations();

        foreach ($configurations as $configuration) {
            $puzzleTestconfiguration = new PuzzleTestConfiguration(
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
