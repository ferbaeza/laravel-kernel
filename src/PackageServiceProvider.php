<?php

namespace Baezeta\Kernel;

use Baezeta\Kernel\Traits\PackageTrait;
use Illuminate\Support\ServiceProvider;
use Baezeta\Kernel\Laravel\Console\SuperAdminCommand;
use Baezeta\Kernel\Laravel\Middleware\TransaccionMiddleware;

class PackageServiceProvider extends ServiceProvider
{
    use PackageTrait;
    
    /**
     * Registrar los bindings de la aplicación
     */
    protected function registerBindings()
    {
        foreach ($this->obtenerBindingsPackage() as $key => $value) {
            is_numeric($key)
                ? $this->app->singleton($value)
                : $this->app->singleton($key, $value);
        }
    }
    /**
     * Registrar los comandos de la aplicación
     */
    protected function registerCommands()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                SuperAdminCommand::class,
            ]);
        }
    }
    /**
     * Registrar package middleware.
     *
     * @return void
     */
    protected function registerMiddleware()
    {
        $this->app['router']->aliasMiddleware('transaccion', TransaccionMiddleware::class);
    }

    /**
     * Register package configuration.
     */
    protected function registerConfig(): void
    {
        $this->publishes([
            __DIR__ . '/../config/package.php' => $this->app->configPath('package.php'),
        ], 'package-config');

        $this->mergeConfigFrom(__DIR__ . '/../config/package.php', 'package');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerBindings();
        $this->registerCommands();
        $this->registerMiddleware();
        // $this->registerConfig();
    }
}
