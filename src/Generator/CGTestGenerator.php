<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Generator;

//use Symfony\Component\Filesystem\Filesystem;

/**
 * The test generator.
 */
final class CGTestGenerator extends FileGenerator
{
    // Constants :

    /**
     * The template file name.
     */
    private const TEMPLATE_FILE_NAME = 'CGTest.twig';

    /**
     * The php file name.
     */
    private const PHP_FILE_NAME = 'CGTest.php';

    /**
     * The input path.
     */
    private const INPUT_PATH = 'input' . DIRECTORY_SEPARATOR;

    /**
     * The output path.
     */
    private const OUTPUT_PATH = 'output' . DIRECTORY_SEPARATOR;


    // Methods :

    /**
     * Generates the test.
     * @param \CyrilVerloop\Codingame\Generator\GeneratorTestConfiguration $configuration the test configuration.
     * @param string $fromPath the path where the config file is.
     * @param string $toPath the path where to put the generated test.
     */
    public function generate(
        GeneratorTestConfiguration $configuration,
        string $fromPath,
        string $toPath
    ): void {
        $testFile = $toPath . self::PHP_FILE_NAME;

        if (file_exists($testFile) === false) {
            if (is_dir($toPath) === false) {
                mkdir($toPath, recursive: true);
            }

            $testContent = $this->twig->render(
                self::TEMPLATE_FILE_NAME,
                ['configuration' => $configuration]
            );

            file_put_contents(
                $testFile,
                $testContent
            );
        }

        $this->copyFiles(
            $fromPath . self::INPUT_PATH,
            $toPath . self::INPUT_PATH
        );

        $this->copyFiles(
            $fromPath . self::OUTPUT_PATH,
            $toPath . self::OUTPUT_PATH
        );
    }

    /**
     * Copies files.
     * @param string $fromPath the path of the configuration.
     * @param string $toPath the path of the test.
     */
    private function copyFiles(string $fromPath, string $toPath): void
    {
        if (is_dir($toPath) === false) {
            mkdir($toPath, recursive: true);
        }

        foreach (scandir($fromPath) as $file) {
            if (file_exists($toPath . $file) === false) {
                copy(
                    $fromPath . $file,
                    $toPath . $file
                );
            }
        }
    }
}
