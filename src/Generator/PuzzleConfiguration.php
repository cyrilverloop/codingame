<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Generator;

/**
 * The puzzle's configuration.
 */
final class PuzzleConfiguration
{
    // Properties :

    /**
     * @var string the namespace.
     */
    private string $namespace;

    /**
     * @var string the name.
     */
    private string $name;

    /**
     * @var string the group.
     */
    private string $group;

    /**
     * @var \CyrilVerloop\Codingame\TestsGenerator\PuzzleTestConfigurations the tests configurations.
     */
    private PuzzleTestConfigurations $testsConfigurations;


    // Magic methods :

    /**
     * The constructor.
     * @param string $namespace the namespace.
     * @param string $name the name.
     * @param string $group the group.
     * @param \CyrilVerloop\Codingame\TestsGenerator\PuzzleTestConfigurations $testsConfigurations
     */
    public function __construct(
        string $namespace,
        string $name,
        string $group,
        PuzzleTestConfigurations $testsConfigurations
    ) {
        $this->namespace = $namespace;
        $this->name = $name;
        $this->group = $group;
        $this->testsConfigurations = $testsConfigurations;
    }


    // Accessors :

    /**
     * Returns the namespace.
     * @return string the namespace.
     */
    public function getNamespace(): string
    {
        return $this->namespace;
    }

    /**
     * Returns the name.
     * @return string the name.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Returns the group.
     * @return string the group.
     */
    public function getGroup(): string
    {
        return $this->group;
    }

    /**
     * Returns the tests configurations.
     * @return \CyrilVerloop\Codingame\TestsGenerator\PuzzleTestConfigurations the tests configurations.
     */
    public function getTestsConfigurations(): PuzzleTestConfigurations
    {
        return $this->testsConfigurations;
    }
}
