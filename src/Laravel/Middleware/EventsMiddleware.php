<?php

namespace Baezeta\Kernel\Laravel\Middleware;

use Baezeta\Kernel\Bus\Infrastructure\EventDispatcher;

class EventsMiddleware
{
    public function process($command, $handler)
    {
        $result =  $handler->handle($command);
        EventDispatcher::dispatch($command);
        return $result;
    }
}
