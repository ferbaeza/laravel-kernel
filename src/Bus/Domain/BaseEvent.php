<?php

namespace Baezeta\Kernel\Bus\Domain;

use Baezeta\Kernel\Command\Base\CommandBase;

class BaseEvent
{
    private CommandBase $command;
    public function __construct()
    {
    }

    public function setCommand(CommandBase $command) //: BaseCommand
    {
        $this->command = $command;
    }
}
