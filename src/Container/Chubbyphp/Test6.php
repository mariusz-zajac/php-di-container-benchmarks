<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Chubbyphp;

use DiContainerBenchmarks\Fixture\Class100;

final class Test6 extends AbstractChubbyphpTest
{
    public function startup(): void
    {
        $this->setContainerWithSingletonServices();
    }

    public function run(): void
    {
        $this->container->get(Class100::class);
    }
}
