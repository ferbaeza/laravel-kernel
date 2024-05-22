<?php

namespace Baezeta\Kernel\Traits;

use Baezeta\Kernel\Laravel\Bindings\PackageBindings;

trait PackageTrait
{
    protected function obtenerBindingsPackage(): array
    {
        return PackageBindings::registrarBindings();
    }

}
