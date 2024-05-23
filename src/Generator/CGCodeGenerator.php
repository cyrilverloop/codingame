<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Generator;

/**
 * The code generator.
 */
final class CGCodeGenerator extends FileGenerator
{
    // Constants :

    /**
     * The template file name.
     */
    private const string TEMPLATE_FILE_NAME = 'CGCode.twig';

    /**
     * The php file name.
     */
    private const string PHP_FILE_NAME = 'CGCode.php';


    // Methods :

    /**
     * Generates the code.
     * @param \CyrilVerloop\Codingame\Generator\CodeGeneratorConfiguration $configuration the code configuration.
     * @param string $toPath the path where to put the generated code.
     */
    public function generate(
        CodeGeneratorConfiguration $configuration,
        string $toPath
    ): void {
        $codeFile = $toPath . self::PHP_FILE_NAME;

        if (file_exists($codeFile) === false) {
            if (is_dir($toPath) === false) {
                mkdir($toPath, recursive: true);
            }

            $codeContent = $this->twig->render(
                self::TEMPLATE_FILE_NAME,
                ['configuration' => $configuration]
            );

            file_put_contents(
                $codeFile,
                $codeContent
            );
        }
    }
}
