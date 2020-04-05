<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Yii2;

use DiContainerBenchmarks\Container\ContainerInterface;
use PackageVersions\Versions;

final class Yii2Container implements ContainerInterface
{
    public function getPackage(): string
    {
        return "yiisoft/yii2";
    }

    public function getVersion(): string
    {
        $version = Versions::getVersion($this->getPackage());

        return explode('@', $version)[0];
    }

    public function getNamespace(): string
    {
        return "Yii2";
    }

    public function getDisplayedName(): string
    {
        return "Yii2 Container";
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
        return "http://www.yiiframework.com/doc-2.0/guide-concept-di-container.html";
    }

    public function build(): void
    {
    }
}
