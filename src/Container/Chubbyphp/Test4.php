<?php

declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Chubbyphp;

use DiContainerBenchmarks\Test\UnsupportedTestException;

final class Test4 extends AbstractChubbyphpTest
{
    public function startup(): void
    {
        throw new UnsupportedTestException('chubbyphp-container cannot act as a factory.');
    }

    public function run(): void
    {
    }
}
