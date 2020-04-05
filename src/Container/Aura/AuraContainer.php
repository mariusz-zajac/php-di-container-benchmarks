<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Aura;

use DiContainerBenchmarks\Container\ContainerInterface;
use PackageVersions\Versions;

final class AuraContainer implements ContainerInterface
{
    public function getPackage(): string
    {
        return "aura/di";
    }

    public function getVersion(): string
    {
        $version = Versions::getVersion($this->getPackage());

        return explode('@', $version)[0];
    }

    public function getNamespace(): string
    {
        return "Aura";
    }

    public function getDisplayedName(): string
    {
        return "Aura";
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
        return "https://github.com/auraphp/Aura.Di";
    }

    public function build(): void
    {
    }
}
