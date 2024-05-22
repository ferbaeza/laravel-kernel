<?php

namespace Baezeta\Kernel\Exceptions\Example;

use Baezeta\Kernel\Exceptions\KernelBaseException;

/**
 * Ejemplo de una Excepcion Uniitaria con un mensaje personalizado para esa excepcion
 * La cual extiende de un Base Exception que va a recoger todas las clases  que tengan 
 * una relacion semantica con sus mensajes de error
 */
class ExampleException extends KernelBaseException
{
    public const MESSAGE = "Ejemplo de mensaje de error";
}
