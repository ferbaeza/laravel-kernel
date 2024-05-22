<?php

namespace Baezeta\Kernel\Bus\Infrastructure;

use Baezeta\Kernel\Bus\Domain\BusEntity;
use Baezeta\Kernel\Bus\Domain\BusHandler;
use Baezeta\Kernel\Laravel\Middleware\EventsMiddleware;
use Baezeta\Kernel\Laravel\Middleware\TransaccionMiddleware;

class CommandBusFacade
{
    public static function create()
    {
        return new BusEntity(
            EventsMiddleware::class,
            TransaccionMiddleware::class,
            BusHandler::class
        );
    }

    public static function process($dto)
    {
        return self::create()->handle($dto);
    }
}
