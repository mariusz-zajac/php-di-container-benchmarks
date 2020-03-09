<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Phalcon;

use DiContainerBenchmarks\Fixture\Class100;

final class Test6 extends AbstractPhalconTest
{
    public function startup(): void
    {
        $this->setContainerWithSingletonServices();
    }

    public function run(): void
    {
        $this->container->getShared(Class100::class);
    }
}
