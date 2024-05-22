<?php

namespace Baezeta\Kernel\Laravel\Bindings\Example\Infrastructure\Bindings;

use Baezeta\Kernel\Laravel\Bindings\Example\Domain\Interfaces\ExampleInterface;
use Baezeta\Kernel\Laravel\Bindings\Example\Infrastructure\Repository\ExampleRepository;

class ExampleBindings
{
    public static function register(): array
    {
        return [
            ExampleInterface::class => ExampleRepository::class,
        ];
    }

}
