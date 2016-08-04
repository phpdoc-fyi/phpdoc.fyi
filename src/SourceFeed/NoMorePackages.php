<?php

namespace PhpDocFyi\SourceFeed;

class NoMorePackages extends \DomainException
{
    public static function create()
    {
        return new self('No more packages are available.');
    }
}