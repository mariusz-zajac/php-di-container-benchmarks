<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Pimple;

use DiContainerBenchmarks\Container\ContainerInterface;
use PackageVersions\Versions;

final class PimpleContainer implements ContainerInterface
{
    public function getPackage(): string
    {
        return "pimple/pimple";
    }

    public function getVersion(): string
    {
        $version = Versions::getVersion($this->getPackage());

        return explode('@', $version)[0];
    }

    public function getNamespace(): string
    {
        return "Pimple";
    }

    public function getDisplayedName(): string
    {
        return "Pimple";
    }

    public function isCompiled(): bool
    {
        return false;
    }

    public function isAutowiringSupported(): bool
    {
        return false;
    }

    public function getUrl(): string
    {
        return "http://pimple.sensiolabs.org/";
    }

    public function build(): void
    {
    }
}
