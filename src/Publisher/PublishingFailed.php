<?php

namespace PhpDocFyi\Publisher;

use PhpDocFyi\Core\Package;

final class PublishingFailed extends \DomainException
{
    public static function create(Package $package, $why)
    {
        return new self(
            sprintf(
                'Publishing package "%s" failed: %s',
                $package->name(),
                $why
            )
        );
    }
}