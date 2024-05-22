<?php

namespace Baezeta\Kernel\Laravel\Console\Example;

class ExampleCommand
{
    public function __construct(
        public readonly string $email,
        public readonly string $password,
    ) {
    }
}
