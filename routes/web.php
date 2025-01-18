<?php

use App\Enums\Example;
use App\Http\Middleware\ShareVersionVariable;
use Illuminate\Support\Facades\Route;

Route::redirect('/docs', '/docs/v2/installation');
Route::redirect('/install', '/docs/v2/installation');
Route::redirect('/summer-release', '/docs/v1/summer-release');

Route::middleware(ShareVersionVariable::class)
    ->group(function () {
        Route::view('/', 'welcome', Example::Welcome->variables())->name('welcome');

        Route::prefix('/docs/v1')
            ->name('documentation.v1.')
            ->group(base_path('routes/versions/v1.php'));

        Route::prefix('/docs/v2')
            ->name('documentation.v2.')
            ->group(base_path('routes/versions/v2.php'));
    });
