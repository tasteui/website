<?php

namespace App\Enums\Examples\V1\Others;

class Contribution
{
    public const LINK = <<<'HTML'
    ln -s /Users/your-user/your-forked-project-path .
    HTML;

    public const COMPOSER = <<<'HTML'
    // ...

    "repositories": [
        {
            "type": "path",
            "url": "./packages/tallstackui/tallstackui"
        }
    ],
    HTML;

    public const COMMAND = <<<'HTML'
    composer require tallstackui/tallstackui:1.x-dev
    HTML;

    public const DUSK = <<<'HTML'
    ./vendor/bin/dusk-updater detect
    HTML;

    public const ALTERNATIVE = <<<'HTML'
    ./vendor/bin/dusk-updater detect --auto-update
    HTML;

    public const ALL_TESTS = <<<'HTML'
    composer ci
    HTML;

    public const FEATURE = <<<'HTML'
    composer test:feature
    HTML;

    public const BROWSER = <<<'HTML'
    composer test:browser

    # Use: composer test:browser:ci, to run the tests without UI.
    HTML;

    public const PINT = <<<'HTML'
    composer format
    HTML;

    public const ANALYSE = <<<'HTML'
    composer type && composer analyse
    HTML;

    public const SYNCHRONIZE = <<<'HTML'
    composer update tallstackui/tallstackui && npm run build && php artisan optimize:clear
    HTML;
}
