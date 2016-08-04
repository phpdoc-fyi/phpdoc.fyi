<?php

namespace PhpDocFyi\SourceFeed;

use PhpDocFyi\Core\Package;

interface Feed
{
    /**
     * @return Package
     * @throws NoMorePackages
     */
    public function nextPackage(): Package;
}