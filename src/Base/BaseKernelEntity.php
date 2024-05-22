<?php

namespace Baezeta\Kernel\Base;

use Baezeta\Kernel\ValueObjects\Main\UuidValue;
use Baezeta\Kernel\ValueObjects\Main\FechaValue;

class BaseKernelEntity
{
    protected string $id;
    protected $fecha;

    public function __construct()
    {
        $this->id = UuidValue::create();
        $this->fecha = FechaValue::create();
    }
}