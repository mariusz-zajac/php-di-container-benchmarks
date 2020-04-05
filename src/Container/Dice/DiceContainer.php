<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Dice;

use DiContainerBenchmarks\Container\ContainerInterface;
use PackageVersions\Versions;

final class DiceContainer implements ContainerInterface
{
    public function getPackage(): string
    {
        return "level-2/dice";
    }

    public function getVersion(): string
    {
        $version = Versions::getVersion($this->getPackage());

        return explode('@', $version)[0];
    }

    public function getNamespace(): string
    {
        return "Dice";
    }

    public function getDisplayedName(): string
    {
        return "Dice";
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
        return "https://github.com/Level-2/Dice";
    }

    public function build(): void
    {
    }
}
