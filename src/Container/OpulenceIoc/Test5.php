<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Container\OpulenceIoc;

use DiContainerBenchmarks\Fixture\Class10;

final class Test5 extends AbstractOpulenceTest
{
    public function startup(): void
    {
        $this->setContainerWithSingletonServices();
    }

    public function run(): void
    {
        $this->container->resolve(Class10::class);
    }
}
