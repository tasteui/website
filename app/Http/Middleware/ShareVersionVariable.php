<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\Response;

class ShareVersionVariable
{
    protected const VERSIONS = [
        'v1',
        'v2',
    ];

    public function handle(Request $request, Closure $next): Response
    {
        $version = str(Route::getCurrentRoute()->uri())->after('docs/')
            ->before('/')
            ->value();

        if (! in_array($version, self::VERSIONS)) {
            return $next($request);
        }

        View::share('version', $version);

        return $next($request);
    }
}
