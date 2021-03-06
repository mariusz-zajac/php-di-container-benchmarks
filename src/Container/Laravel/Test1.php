<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Laravel;

use DiContainerBenchmarks\Fixture\Class10;

final class Test1 extends AbstractLaravelTest
{
    public function startup(): void
    {
        $this->setContainerWithSingletonServices();
    }

    public function run(): void
    {
        $this->container->make(Class10::class);
    }
}
