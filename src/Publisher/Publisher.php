<?php

namespace PhpDocFyi\Publisher;

use PhpDocFyi\Core\Source;

interface Publisher
{
    public function publish(Source $docsSource): void;
}