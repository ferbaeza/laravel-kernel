<?php

namespace Baezeta\Kernel\Base;

use Baezeta\Kernel\ValueObjects\Main\ClassValue;
use Baezeta\Kernel\ValueObjects\Main\FechaValue;

abstract class BaseKernelEntity
{
    private ?ClassValue $idClass = null;
    private ?FechaValue $fechaStart = null;


    public function __construct(

    ) {
        $this->idClass = ClassValue::create();
        $this->fechaStart = FechaValue::create();
    }

    public function parentSerialize(): mixed
    {
        return get_object_vars($this);
    }

    public function getIdClass(): ClassValue
    {
        return $this->idClass;
    }

    public function getFechaStart(): FechaValue
    {
        return $this->fechaStart;
    }
}
