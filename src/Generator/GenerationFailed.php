<?php

namespace PhpDocFyi\Generator;

use PhpDocFyi\Core\Package;

final class GenerationFailed extends \DomainException
{
    public static function create(Package $package, string $why)
    {
        return new self(
            sprintf(
                'Generating package "%s" failed: %s',
                $package->name(),
                $why
            )
        );
    }
}