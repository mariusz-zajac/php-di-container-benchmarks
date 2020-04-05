<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Container\LaminasServiceManager;

use DiContainerBenchmarks\Container\ContainerInterface;
use PackageVersions\Versions;

final class LaminasServiceManagerContainer implements ContainerInterface
{
    public function getPackage(): string
    {
        return "laminas/laminas-servicemanager";
    }

    public function getVersion(): string
    {
        $version = Versions::getVersion($this->getPackage());

        return explode('@', $version)[0];
    }

    public function getNamespace(): string
    {
        return "LaminasServiceManager";
    }

    public function getDisplayedName(): string
    {
        return "Laminas ServiceManager";
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
        return "https://docs.laminas.dev/laminas-servicemanager/";
    }

    public function build(): void
    {
    }
}
