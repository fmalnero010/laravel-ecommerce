<?php

declare(strict_types=1);

use Illuminate\Http\Request;
use Src\Security\Middlewares\ForceJson;

describe('ForceJson Middleware', function (): void {
    it('should set Accept header to application/json', function (): void {
        $middleware = new ForceJson();
        $request = Request::create('/api/users');

        expect($request->headers->get('Accept'))
            ->not
            ->toBe('application/json');

        $middleware->handle($request, function ($req) {
            expect($req->headers->get('Accept'))
                ->toBe('application/json');

            return response()->json([
                'ok' => true,
            ]);
        });

        expect($request->headers->get('Accept'))
            ->toBe('application/json');
    });

    it('should override existing Accept header', function (): void {
        $middleware = new ForceJson();
        $request = Request::create('/api/users');
        $request->headers->set('Accept', 'text/html');

        expect($request->headers->get('Accept'))
            ->toBe('text/html');

        $middleware->handle($request, fn ($req) => response()->json([
            'ok' => true,
        ]));

        expect($request->headers->get('Accept'))
            ->toBe('application/json');
    });
});
