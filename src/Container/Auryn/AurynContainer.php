<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Auryn;

use DiContainerBenchmarks\Container\ContainerInterface;
use PackageVersions\Versions;

final class AurynContainer implements ContainerInterface
{
    public function getPackage(): string
    {
        return "rdlowrey/auryn";
    }

    public function getVersion(): string
    {
        $version = Versions::getVersion($this->getPackage());

        return explode('@', $version)[0];
    }

    public function getNamespace(): string
    {
        return "Auryn";
    }

    public function getDisplayedName(): string
    {
        return "Auryn";
    }

    public function isCompiled(): bool
    {
        return false;
    }

    public function isAutowiringSupported(): bool
    {
        return true;
    }

    public function getUrl(): string
    {
        return "https://github.com/rdlowrey/auryn";
    }

    public function build(): void
    {
    }
}
