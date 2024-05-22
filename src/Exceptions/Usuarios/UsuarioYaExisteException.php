<?php

namespace Baezeta\Kernel\Exceptions\Usuarios;

use Baezeta\Kernel\Exceptions\KernelBaseException;

class UsuarioYaExisteException extends KernelBaseException
{
    public const MESSAGE = "Ya existe un usuario superadmin con este email %s en el sistema";

    protected static $messages = [
        self::class => self::MESSAGE,
    ];
}
