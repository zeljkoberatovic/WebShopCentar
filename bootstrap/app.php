<?php

use Illuminate\Foundation\Application;
use App\Http\Middleware\IsAdmin;
use App\Http\Middleware\IsUser;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        return [
            'is_admin' => IsAdmin::class,
            'is_user' => IsUser::class,
        ];
    })
    ->withExceptions(function ($exceptions) {
        //
    })
    ->create();
