<?php

namespace Baezeta\Kernel\Laravel\Routes;

use Illuminate\Support\Facades\Route;
use Baezeta\Kernel\Laravel\Controller\WebController;

Route::prefix(BaseRoutes::$prefix)
    ->group(function () {
        Route::get('/', [WebController::class, 'show'])->middleware(['web', 'superadmin.dashboard']);
        // ExampleRoutes::configure();
    });
