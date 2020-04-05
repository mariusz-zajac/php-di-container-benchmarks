<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Phalcon;

use DiContainerBenchmarks\Container\ContainerInterface;

final class PhalconContainer implements ContainerInterface
{
    public function getPackage(): string
    {
        return 'Phalcon';
    }

    public function getVersion(): string
    {
        return phpversion('phalcon');
    }

    public function getNamespace(): string
    {
        return 'Phalcon';
    }

    public function getDisplayedName(): string
    {
        return 'Phalcon';
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
        return 'https://docs.phalcon.io/4.0/en/di';
    }

    public function build(): void
    {
    }
}
