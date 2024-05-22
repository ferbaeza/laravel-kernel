<?php

namespace Baezeta\Kernel\Exceptions\ValueObjects;

use Baezeta\Kernel\Exceptions\ValueObjects\ValueObjectException;

class EmailInvalidoException extends ValueObjectException
{
    public const MESSAGE = "El email %s no cumple el formato";
}
