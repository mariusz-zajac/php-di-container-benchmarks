<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Joomla;

use DiContainerBenchmarks\Container\ContainerInterface;
use PackageVersions\Versions;

final class JoomlaContainer implements ContainerInterface
{
    public function getPackage(): string
    {
        return "joomla/di";
    }

    public function getVersion(): string
    {
        $version = Versions::getVersion($this->getPackage());

        return explode('@', $version)[0];
    }

    public function getNamespace(): string
    {
        return "Joomla";
    }

    public function getDisplayedName(): string
    {
        return "Joomla";
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
        return "https://github.com/joomla-framework/di";
    }

    public function build(): void
    {
    }
}
