<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Chubbyphp;

use DiContainerBenchmarks\Container\ContainerInterface;
use PackageVersions\Versions;

final class ChubbyphpContainer implements ContainerInterface
{
    public function getPackage(): string
    {
        return "chubbyphp/chubbyphp-container";
    }

    public function getVersion(): string
    {
        $version = Versions::getVersion($this->getPackage());

        return explode('@', $version)[0];
    }

    public function getNamespace(): string
    {
        return "Chubbyphp";
    }

    public function getDisplayedName(): string
    {
        return "Chubbyphp";
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
        return "https://github.com/chubbyphp/chubbyphp-container";
    }

    public function build(): void
    {
    }
}
