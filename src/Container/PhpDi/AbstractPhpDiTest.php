<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Container\PhpDi;

use DiContainerBenchmarks\Test\TestInterface;
use Psr\Container\ContainerInterface;

abstract class AbstractPhpDiTest implements TestInterface
{
    protected ContainerInterface $container;

    protected function setContainerWithPrototypeServices(): void
    {
    }

    protected function setContainerWithSingletonServices(): void
    {
        $this->container = new \CompiledSingletonContainer();
    }
}
