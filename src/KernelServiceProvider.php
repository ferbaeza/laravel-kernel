<?php

namespace Baezeta\Kernel;

use Illuminate\Support\ServiceProvider;
use Baezeta\Kernel\Laravel\Middleware\TransaccionMiddleware;

class KernelServiceProvider extends ServiceProvider
{
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
            __DIR__ . '/../config/kernel.php' => $this->app->configPath('kernel.php'),
        ], 'kernel-laravel');

        $this->mergeConfigFrom(__DIR__ . '/../config/kernel.php', 'kernel');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerMiddleware();
        $this->registerConfig();
    }
}
