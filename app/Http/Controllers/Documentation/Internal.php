<?php

namespace App\Http\Controllers\Documentation;

use Illuminate\Contracts\View\View;

class Internal
{
    // It actually is related with `error` component.
    public function index(): View
    {
        $personalization = <<<'HTML'
        TallStackUi::personalize()
            ->form('error')
            ->block('block', 'classes');
        HTML;

        return view('documentation.v1.internal.error', [
            'personalization' => $personalization,
        ]);
    }

    public function hint(): View
    {
        $personalization = <<<'HTML'
        TallStackUi::personalize()
            ->form('hint')
            ->block('block', 'classes');
        HTML;

        return view('documentation.v1.internal.hint', [
            'personalization' => $personalization,
        ]);
    }

    public function label(): View
    {
        $personalization = <<<'HTML'
        TallStackUi::personalize()
            ->form('label')
            ->block('block', 'classes');
        HTML;

        return view('documentation.v1.internal.label', [
            'personalization' => $personalization,
        ]);
    }

    public function wrapper(): View
    {
        $personalization['input'] = <<<'HTML'
        TallStackUi::personalize()
            ->wrapper('input')
            ->block('block', 'classes');
        HTML;

        $personalization['radio'] = <<<'HTML'
        TallStackUi::personalize()
            ->wrapper('radio')
            ->block('block', 'classes');
        HTML;

        return view('documentation.v1.internal.wrapper', [
            'personalization' => $personalization,
        ]);
    }

    public function floating(): View
    {
        $personalization = <<<'HTML'
        TallStackUi::personalize()
            ->floating()
            ->block('block', 'classes');
        HTML;

        return view('documentation.v1.internal.floating', [
            'personalization' => $personalization,
        ]);
    }
}
