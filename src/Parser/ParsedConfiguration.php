<?php

declare(strict_types=1);

namespace CyrilVerloop\Codingame\Parser;

use CyrilVerloop\Codingame\Configuration\TestConfigurations;

/**
 * The parsed configuration.
 */
final class ParsedConfiguration
{
    // Properties :

    /**
     * @var string the path.
     */
    private string $path;

    /**
     * @var string the name.
     */
    private string $name;

    /**
     * @var string the alphanumeric name.
     */
    private string $alphanumName;

    /**
     * @var string the link.
     */
    private string $link;

    /**
     * @var \CyrilVerloop\Codingame\Configuration\TestConfigurations the tests configurations.
     */
    private TestConfigurations $testConfigurations;


    // Magic methods :

    /**
     * The constructor.
     * @param string $path the path.
     * @param string $name the name.
     * @param string $alphanumName the alphanumeric name.
     * @param string $link the link.
     * @param \CyrilVerloop\Codingame\Configuration\TestConfigurations $testConfigurations the test configurations.
     */
    public function __construct(
        string $path,
        string $name,
        string $alphanumName,
        string $link,
        TestConfigurations $testConfigurations
    ) {
        $this->path = $path;
        $this->name = $name;
        $this->alphanumName = $alphanumName;
        $this->link = $link;
        $this->testConfigurations = $testConfigurations;
    }


    // Accessors :

    /**
     * Returns the path.
     * @return string the path.
     */
    public function getPath(): string
    {
        return $this->path;
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
     * Returns the alphanumeric name.
     * @return string the alphanumeric name.
     */
    public function getAlphanumName(): string
    {
        return $this->alphanumName;
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
     * @return \CyrilVerloop\Codingame\Configuration\TestConfigurations the tests configurations.
     */
    public function getTestConfigurations(): TestConfigurations
    {
        return $this->testConfigurations;
    }
}
