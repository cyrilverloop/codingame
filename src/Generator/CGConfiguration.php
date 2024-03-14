<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Generator;

/**
 * The puzzle's configuration.
 */
final class CGConfiguration
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
     * @var string the link.
     */
    private string $link;

    /**
     * @var \CyrilVerloop\Codingame\TestsGenerator\CGTestConfigurations the tests configurations.
     */
    private CGTestConfigurations $testConfigurations;


    // Magic methods :

    /**
     * The constructor.
     * @param string $namespace the namespace.
     * @param string $name the name.
     * @param string $group the group.
     * @param string $link the link.
     * @param \CyrilVerloop\Codingame\TestsGenerator\CGTestConfigurations $testConfigurations
     */
    public function __construct(
        string $namespace,
        string $name,
        string $group,
        string $link,
        CGTestConfigurations $testConfigurations
    ) {
        $this->namespace = $namespace;
        $this->name = $name;
        $this->group = $group;
        $this->link = $link;
        $this->testConfigurations = $testConfigurations;
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
     * Returns the link.
     * @return string the link.
     */
    public function getLink(): string
    {
        return $this->link;
    }

    /**
     * Returns the tests configurations.
     * @return \CyrilVerloop\Codingame\TestsGenerator\CGTestConfigurations the tests configurations.
     */
    public function getTestConfigurations(): CGTestConfigurations
    {
        return $this->testConfigurations;
    }
}
