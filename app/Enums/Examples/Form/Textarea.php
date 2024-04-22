<?php

namespace App\Enums\Examples\Form;

class Textarea
{
    public const BASIC = <<<'HTML'
    <x-textarea />
    HTML;

    public const ASTERISK = <<<'HTML'
    <x-textarea label="Description *" />
    HTML;

    public const RESIZE = <<<'HTML'
    <x-textarea resize />
    HTML;

    public const RESIZE_AUTO = <<<'HTML'
    <x-textarea resize-auto />
    HTML;

    public const LABEL_HINT = <<<'HTML'
    <x-textarea label="Name" hint="Insert the description" />
    HTML;

    public const COUNT = <<<'HTML'
    <x-textarea maxlength="10" count />
    HTML;

    public const INVALIDATE = <<<'HTML'
    <x-textarea label="Name" hint="Insert the description" invalidate />
    HTML;

    public const PERSONALIZATION = <<<'HTML'
    TallStackUi::personalize()
        ->form('textarea')
        ->block('block', 'classes');
    HTML;
}
