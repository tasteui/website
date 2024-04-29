<?php

namespace App\Enums\Examples\Ui;

class Rating
{
    public const BASIC = <<<'HTML'
    <x-rating />
    HTML;

    public const PERSONALIZATION = <<<'HTML'
    TallStackUi::personalize()
        ->rating()
        ->block('block', 'classes');
    HTML;
}
