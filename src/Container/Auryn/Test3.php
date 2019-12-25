<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Auryn;

use DiContainerBenchmarks\Fixture\Class10;

final class Test3 extends AbstractAurynTest
{
    public function startup(): void
    {
        $this->setContainerWithPrototypeServices();
    }

    public function run(): void
    {
        $this->container->make(Class10::class);
    }
}
