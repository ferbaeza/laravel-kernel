<?php

namespace Baezeta\Kernel\Exceptions\ValueObjects;

use Baezeta\Kernel\Exceptions\ValueObjects\ValueObjectException;

class FechaInvalidaException extends ValueObjectException
{
    public const MESSAGE = "La fecha %s no cumple el formato";
}
