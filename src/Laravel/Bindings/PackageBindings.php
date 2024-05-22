<?php

namespace Baezeta\Kernel\Laravel\Bindings;

use Baezeta\Kernel\Laravel\Bindings\Example\Infrastructure\Bindings\ExampleBindings;

class PackageBindings
{
    public static function registrarBindings(): array
    {
        return array_merge(
            ExampleBindings::register(),
        );
    }
}
