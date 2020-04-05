<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Disco;

use DiContainerBenchmarks\Container\ContainerInterface;
use PackageVersions\Versions;

final class DiscoContainer implements ContainerInterface
{
    public function getPackage(): string
    {
        return "bitexpert/disco";
    }

    public function getVersion(): string
    {
        $version = Versions::getVersion($this->getPackage());

        return explode('@', $version)[0];
    }

    public function getNamespace(): string
    {
        return "Disco";
    }

    public function getDisplayedName(): string
    {
        return "Disco";
    }

    public function build(): void
    {
    }

    public function isCompiled(): bool
    {
        return true;
    }

    public function isAutowiringSupported(): bool
    {
        return false;
    }

    public function getUrl(): string
    {
        return 'https://github.com/bitExpert/disco';
    }
}
