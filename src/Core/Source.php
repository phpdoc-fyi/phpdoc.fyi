<?php

namespace PhpDocFyi\Core;

class Source
{
    /**
     * @var string
     */
    private $sourceType;
    /**
     * @var string
     */
    private $sourceUrl;

    public function __construct(string $sourceType, string $sourceUrl)
    {

        $this->sourceType = $sourceType;
        $this->sourceUrl = $sourceUrl;
    }
}