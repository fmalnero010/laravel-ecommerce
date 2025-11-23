<?php

declare(strict_types=1);

use Illuminate\Database\Eloquent\ModelNotFoundException as EloquentModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Src\Categories\Domain\Models\Category;
use Src\Products\Domain\Models\Product;
use Src\Shared\Exceptions\ExceptionHandler;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;

describe('ExceptionHandler', function (): void {
    beforeEach(function (): void {
        $this->handler = new ExceptionHandler(app());
        $this->request = Request::create('/test', 'GET');
        $this->request->headers->set('Accept', 'application/json');
    });

    describe('render method', function (): void {
        test('should return full error details when debug is enabled', function (): void {
            Config::set('app.debug', true);

            $exception = new HttpException(404, 'Test not found');

            $response = $this->handler->render($this->request, $exception);
            $content = json_decode((string) $response->getContent(), true);

            expect($response->getStatusCode())->toBe(404)
                ->and($content)->toHaveKey('message')
                ->and($content['message'])->toBe('Test not found')
                ->and($content)->toHaveKey('exception');
        });

        test('should return only message when debug is disabled with HttpException', function (): void {
            Config::set('app.debug', false);

            $exception = new HttpException(403, 'Forbidden access');

            $response = $this->handler->render($this->request, $exception);

            expect($response->getStatusCode())->toBe(403)
                ->and(json_decode((string) $response->getContent(), true))->toBe([
                    'message' => 'Forbidden access',
                ]);
        });

        test('should return 500 status code for generic exceptions when debug is disabled', function (): void {
            Config::set('app.debug', false);

            $exception = new Exception('Something went wrong');

            $response = $this->handler->render($this->request, $exception);

            expect($response->getStatusCode())->toBe(Response::HTTP_INTERNAL_SERVER_ERROR)
                ->and(json_decode((string) $response->getContent(), true))->toBe([
                    'message' => 'Something went wrong',
                ]);
        });

        test('should return Server Error message when exception has no message and debug is disabled', function (): void {
            Config::set('app.debug', false);

            $exception = new Exception('');

            $response = $this->handler->render($this->request, $exception);

            expect($response->getStatusCode())->toBe(Response::HTTP_INTERNAL_SERVER_ERROR)
                ->and(json_decode((string) $response->getContent(), true))->toBe([
                    'message' => 'Server Error',
                ]);
        });

        test('should map ModelNotFoundException and return custom message with product', function (): void {
            Config::set('app.debug', false);

            $exception = new EloquentModelNotFoundException();
            $exception->setModel(Product::class);

            $response = $this->handler->render($this->request, $exception);

            expect($response->getStatusCode())->toBe(Response::HTTP_NOT_FOUND)
                ->and(json_decode((string) $response->getContent(), true))->toBe([
                    'message' => 'The product could not be found',
                ]);
        });

        test('should map ModelNotFoundException and return custom message with category', function (): void {
            Config::set('app.debug', false);

            $exception = new EloquentModelNotFoundException();
            $exception->setModel(Category::class);

            $response = $this->handler->render($this->request, $exception);

            expect($response->getStatusCode())->toBe(Response::HTTP_NOT_FOUND)
                ->and(json_decode((string) $response->getContent(), true))->toBe([
                    'message' => 'The category could not be found',
                ]);
        });

        test('should map ModelNotFoundException without model to generic message', function (): void {
            Config::set('app.debug', false);

            $exception = new EloquentModelNotFoundException();

            $response = $this->handler->render($this->request, $exception);

            expect($response->getStatusCode())->toBe(Response::HTTP_NOT_FOUND)
                ->and(json_decode((string) $response->getContent(), true))->toBe([
                    'message' => 'The searched model could not be found',
                ]);
        });

        test('should not modify non-mapped exceptions', function (): void {
            Config::set('app.debug', false);

            $exception = new RuntimeException('Runtime error occurred');

            $response = $this->handler->render($this->request, $exception);

            expect($response->getStatusCode())->toBe(Response::HTTP_INTERNAL_SERVER_ERROR)
                ->and(json_decode((string) $response->getContent(), true))->toBe([
                    'message' => 'Runtime error occurred',
                ]);
        });
    });
});
