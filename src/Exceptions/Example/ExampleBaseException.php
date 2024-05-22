<?php

namespace Baezeta\Kernel\Exceptions\Example;

use Baezeta\Kernel\Exceptions\KernelBaseException;
use Baezeta\Kernel\Exceptions\Example\ExampleException;


/**
 * Este es un Base Exception que va a recoger todas las clases con sus mensajes de error
 */
class ExampleBaseException extends KernelBaseException
{
    protected static $messages = [
        ExampleException::class => ExampleException::MESSAGE,
    ];
}
