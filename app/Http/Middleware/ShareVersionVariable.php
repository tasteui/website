<?php

namespace App\Http\Middleware;

use App\Traits\VersionDiscovery;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\Response;

class ShareVersionVariable
{
    use VersionDiscovery;

    public function handle(Request $request, Closure $next): Response
    {
        $version = $this->current();

        if (! Cookie::has('version')) {
            Cookie::queue(Cookie::forever('version', $version));
        }

        View::share('version', $version);

        return $next($request);
    }
}
