<?php

use App\Http\Controllers\WelcomeController;
use App\Http\Middleware\ShareVersionVariable;
use Illuminate\Support\Facades\Route;

Route::redirect('/docs', '/docs/get-started');
Route::redirect('/install', '/docs/installation');
Route::redirect('/summer-release', '/docs/summer-release');

Route::get('/', WelcomeController::class)->name('welcome');

Route::middleware(ShareVersionVariable::class)
    ->group(function () {

        Route::prefix('/docs/v1')
            ->name('documentation.v1.')
            ->group(base_path('routes/versions/v1.php'));

        Route::prefix('/docs/v2')
            ->name('documentation.v2.')
            ->group(base_path('routes/versions/v2.php'));
    });
