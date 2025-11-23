<?php

declare(strict_types=1);

use Illuminate\Database\Eloquent\ModelNotFoundException as EloquentModelNotFoundException;
use Src\Products\Domain\Models\Product;
use Src\Shared\Exceptions\ModelNotFoundException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;

describe('ModelNotFoundException', function (): void {
    test('should extend HttpException', function (): void {
        $eloquentException = new EloquentModelNotFoundException();
        $exception = new ModelNotFoundException($eloquentException);

        expect($exception)->toBeInstanceOf(HttpException::class);
    });

    test('should have 404 status code', function (): void {
        $eloquentException = new EloquentModelNotFoundException();
        $exception = new ModelNotFoundException($eloquentException);

        expect($exception->getStatusCode())->toBe(Response::HTTP_NOT_FOUND);
    });

    test('should format message with model name in lowercase', function (): void {
        $eloquentException = new EloquentModelNotFoundException();
        $eloquentException->setModel(Product::class);

        $exception = new ModelNotFoundException($eloquentException);

        expect($exception->getMessage())->toBe('The product could not be found');
    });

    test('should use generic message when model is not set', function (): void {
        $eloquentException = new EloquentModelNotFoundException();

        $exception = new ModelNotFoundException($eloquentException);

        expect($exception->getMessage())->toBe('The searched model could not be found');
    });

    test('should preserve previous exception', function (): void {
        $eloquentException = new EloquentModelNotFoundException();
        $eloquentException->setModel(Product::class);

        $exception = new ModelNotFoundException($eloquentException);

        expect($exception->getPrevious())->toBe($eloquentException);
    });

    test('should accept custom code parameter', function (): void {
        $eloquentException = new EloquentModelNotFoundException();
        $customCode = 42;

        $exception = new ModelNotFoundException($eloquentException, $customCode);

        expect($exception->getCode())->toBe($customCode);
    });
});
