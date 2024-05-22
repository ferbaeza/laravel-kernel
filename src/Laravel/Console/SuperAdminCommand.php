<?php

namespace Baezeta\Kernel\Laravel\Console;

use Illuminate\Console\Command;
use Symfony\Component\Console\Attribute\AsCommand;
use Baezeta\Kernel\Bus\Infrastructure\CommandBusFacade;
use Baezeta\Kernel\Laravel\Console\Example\ExampleCommand;

#[AsCommand(name: 'admin:create-super-admin')]
class SuperAdminCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'admin:to-do';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command to do something';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $email = $this->components->ask('Introduce your email?', 'example@email.com');
        $password = $this->components->secret(' Introduce tu Password:');

        if(!$this->verificarEmail($email)) {
            $this->output->error('El email introducido no es valido');
            return Command::FAILURE;
        }

        if (!$this->verificarPassword($password)) {
            $this->output->error('El password introducido no es valido');
            return Command::FAILURE;
        }

        if(!$this->registrarUsuario($email, $password)) {
            $this->output->error('El processo se ha interrumpido');
            return Command::FAILURE;
        }

        $this->components->task('El email ' . $email . ' introducido es correcto.');
        $this->components->task('El Usuario SuperAdmin ' . $email . ' has been created successfully');

        return Command::SUCCESS;
    }

    private function registrarUsuario(string $email, string $password)
    {
        try {
            $command = new ExampleCommand($email, $password);
            return CommandBusFacade::process($command);

        } catch (\Throwable $th) {
            $this->output->error($th->getMessage());
            return false;
        }
    }

    private function verificarEmail(string $email)
    {
        return isValidEmail($email);
    }

    private function verificarPassword(string $password)
    {
        return isValidPassword($password);
    }
}
