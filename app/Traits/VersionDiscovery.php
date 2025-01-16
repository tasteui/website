<?php

namespace App\Traits;

use Illuminate\Support\Facades\Route;

trait VersionDiscovery
{
    /**
     * The available versions.
     */
    public array $versions = [
        'v1',
        'v2',
    ];

    /**
     * Discover the version based on the current route.
     */
    public function version(): string
    {
        return str(Route::getCurrentRoute()->uri())->after('docs/')
            ->before('/')
            ->value();
    }

    /**
     * Get the current route URI.
     */
    public function uri(): string
    {
        return Route::getCurrentRoute()->uri();
    }

    /**
     * Get the cache key for the current route.
     */
    public function cacheKey(): string
    {
        return $this->version().'-'.$this->uri();
    }
}
