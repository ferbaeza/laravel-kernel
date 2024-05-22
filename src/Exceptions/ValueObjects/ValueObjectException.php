<?php

namespace Baezeta\Kernel\Exceptions\ValueObjects;

use Baezeta\Kernel\Exceptions\KernelBaseException;
use Baezeta\Kernel\Exceptions\ValueObjects\UuidException;

class ValueObjectException extends KernelBaseException
{

    protected static $messages = [
        UuidException::class => UuidException::MESSAGE,
        EmailInvalidoException::class => EmailInvalidoException::MESSAGE,
    ];
}
