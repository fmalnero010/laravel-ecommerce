<?php

declare(strict_types=1);

namespace Src\Shared\Exceptions;

use Illuminate\Database\Eloquent\ModelNotFoundException as EloquentModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Config;
use Symfony\Component\HttpFoundation\Response;
use Throwable;

final class ExceptionHandler extends Handler
{
    public function render(mixed $request, Throwable $e): Response
    {
        $e = $this->mapException($e);

        if (Config::boolean('app.debug')) {
            return parent::render($request, $e);
        }

        /** @var int $statusCode */
        $statusCode = method_exists($e, 'getStatusCode')
            ? $e->getStatusCode()
            : Response::HTTP_INTERNAL_SERVER_ERROR;

        return new JsonResponse([
            'message' => $e->getMessage() ?: 'Server Error',
        ], $statusCode);
    }

    public function mapException(Throwable $e): Throwable
    {
        return match (true) {
            $e instanceof EloquentModelNotFoundException => new ModelNotFoundException($e),
            default => $e,
        };
    }
}
