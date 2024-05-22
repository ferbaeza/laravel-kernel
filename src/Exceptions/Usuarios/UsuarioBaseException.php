<?php

namespace Baezeta\Kernel\Exceptions\Usuarios;

use Baezeta\Kernel\Exceptions\KernelBaseException;

class UsuarioBaseException extends KernelBaseException
{

    protected static $messages = [
        UsuarioYaExisteException::class => UsuarioYaExisteException::MESSAGE,
    ];
}
