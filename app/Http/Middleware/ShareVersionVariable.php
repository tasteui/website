<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\Response;

class ShareVersionVariable
{
    public function handle(Request $request, Closure $next): Response
    {
        $uri = Route::getCurrentRoute()->uri();

        View::share('version', str($uri)->after('docs/')->before('/')->value());

        return $next($request);
    }
}
