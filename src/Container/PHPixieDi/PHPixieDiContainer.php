<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Container\PHPixieDi;

use DiContainerBenchmarks\Container\ContainerInterface;
use PackageVersions\Versions;

final class PHPixieDiContainer implements ContainerInterface
{
    public function getPackage(): string
    {
        return "phpixie/di";
    }

    public function getVersion(): string
    {
        $version = Versions::getVersion($this->getPackage());

        return explode('@', $version)[0];
    }

    public function getNamespace(): string
    {
        return "PHPixieDi";
    }

    public function getDisplayedName(): string
    {
        return "PHPixie DI";
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
        return "https://github.com/phpixie/di";
    }

    public function build(): void
    {
    }
}
