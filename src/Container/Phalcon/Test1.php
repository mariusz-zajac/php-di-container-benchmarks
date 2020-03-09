<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Phalcon;

use DiContainerBenchmarks\Fixture\Class10;

final class Test1 extends AbstractPhalconTest
{
    public function startup(): void
    {
        $this->setContainerWithSingletonServices();
    }

    public function run(): void
    {
        $this->container->getShared(Class10::class);
    }
}
