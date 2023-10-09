<?php

namespace App\Http\Controllers\Documentation;

use App\Enums\Example;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class Personalization extends Controller
{
    public function concept(): View
    {
        return view('documentation.personalization.concept');
    }

    public function color(): View
    {
        return view('documentation.personalization.color', Example::ColorPersonalization->variables());
    }

    public function soft(): View
    {
        return view('documentation.personalization.soft', Example::SoftPersonalization->variables());
    }

    public function deep(): View
    {
        return view('documentation.personalization.deep', Example::DeepPersonalization->variables());
    }
}
