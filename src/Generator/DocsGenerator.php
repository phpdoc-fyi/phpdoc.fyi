<?php

namespace PhpDocFyi\Generator;

use PhpDocFyi\Core\Package;
use PhpDocFyi\Core\Source;

interface DocsGenerator
{
    public function generate(Package $package): Source;
}