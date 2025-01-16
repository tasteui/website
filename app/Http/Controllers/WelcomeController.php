<?php

namespace App\Http\Controllers;

use App\Enums\Example;
use App\Traits\VersionDiscovery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class WelcomeController
{
    use VersionDiscovery;

    public function __invoke(Request $request)
    {
        $version = $this->current();

        if (! Cookie::has('version')) {
            Cookie::queue(Cookie::forever('version', $version));
        }

        return view('welcome', [
            'personalization' => Example::Welcome->variables($version),
        ]);
    }
}
