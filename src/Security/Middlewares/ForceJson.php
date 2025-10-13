<?php

declare(strict_types=1);

namespace Src\Security\Middlewares;

use Closure;
use Illuminate\Http\Request;

final class ForceJson
{
    public function handle(Request $request, Closure $next)
    {
        $request->headers->set('Accept', 'application/json');

        return $next($request);
    }
}
