<?php

declare(strict_types=1);

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Foundation\Exceptions\Handler;
use Illuminate\Http\Request;
use Src\Security\Middlewares\ForceJson;
use Src\Shared\Exceptions\ExceptionHandler;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->append([
            ForceJson::class,
        ]);
    })
    ->withBindings([Handler::class => ExceptionHandler::class])
    ->withExceptions(function (Exceptions $exceptions): void {
        $exceptions->shouldRenderJsonWhen(function (Request $request): bool {
            if ($request->is('api/*')) {
                return true;
            }

            return $request->expectsJson();
        });
    })->create();
