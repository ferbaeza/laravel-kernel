<?php

namespace Baezeta\Kernel\Laravel\Routes;

use Illuminate\Support\Facades\Route;
use Baezeta\Kernel\Laravel\Controller\WebController;

/** @phpstan-ignore-next-line */
Route::prefix(BaseRoutes::$prefix)
->group(function () {
    /** @phpstan-ignore-next-line */
        Route::get('/', [WebController::class, 'show'])->middleware(['web', 'superadmin.dashboard']);
        // ExampleRoutes::configure();
    });
