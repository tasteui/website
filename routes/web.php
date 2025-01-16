<?php

use App\Enums\Example;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome', Example::Welcome->variables())->name('welcome');

Route::redirect('/docs', '/docs/get-started');
Route::redirect('/install', '/docs/installation');
Route::redirect('/summer-release', '/docs/summer-release');

Route::prefix('/docs/v1')
    ->name('documentation.v1.')
    ->group(base_path('routes/versions/v1.php'));

Route::prefix('/docs/v2')
    ->name('documentation.v2.')
    ->group(base_path('routes/versions/v2.php'));
