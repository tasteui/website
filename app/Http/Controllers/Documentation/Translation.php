<?php

namespace App\Http\Controllers\Documentation;

use App\Enums\Example;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class Translation extends Controller
{
    public function __invoke(): View
    {
        return view('documentation.translation', Example::Translation->variables());
    }
}