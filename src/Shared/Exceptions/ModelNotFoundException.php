<?php

declare(strict_types=1);

namespace Src\Shared\Exceptions;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException as EloquentModelNotFoundException;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;

/**
 * @template T of Model
 */
final class ModelNotFoundException extends HttpException
{
    /**
     * @param  EloquentModelNotFoundException<T>  $previous
     */
    public function __construct(
        EloquentModelNotFoundException $previous,
        int $code = 0,
    ) {
        parent::__construct(
            statusCode: Response::HTTP_NOT_FOUND,
            message: $this->formatMessage($previous),
            previous: $previous,
            code: $code
        );
    }

    /**
     * @param  EloquentModelNotFoundException<T>  $e
     */
    private function formatMessage(EloquentModelNotFoundException $e): string
    {
        $model = $e->getModel();

        $modelName = $model
            ? Str::lower(class_basename($model))
            : 'searched model';

        return "The $modelName could not be found";
    }
}
