<?php

namespace Baezeta\Kernel\Exceptions\ValueObjects;

use Baezeta\Kernel\Exceptions\ValueObjects\ValueObjectException;

class UuidException extends ValueObjectException
{
    public const MESSAGE = "El UUID %s no cumple el formato";
}
