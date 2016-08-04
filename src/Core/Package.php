<?php
namespace PhpDocFyi\Core;

class Package
{
    /**
     * @var string
     */
    private $name;
    /**
     * @var string
     */
    private $version;
    /**
     * @var Source
     */
    private $source;

    public function __construct(string $name, string $version, Source $source)
    {
        $this->name = $name;
        $this->version = $version;
        $this->source = $source;
    }

    public function name()
    {
        return $this->name;
    }

    /**
     * Will return the major version of the package.
     *
     * @return string
     */
    public function version()
    {
        return $this->version;
    }
}