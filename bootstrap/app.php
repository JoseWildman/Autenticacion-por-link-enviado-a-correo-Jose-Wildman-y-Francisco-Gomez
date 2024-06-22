<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use PragmaRX\Google2FA\Google2FA;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // protected $routeMiddleware = [
        //     '2fa' => Google2FA::class,
        // ];
        // $middleware->web('2fa', Google2FA::class);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
