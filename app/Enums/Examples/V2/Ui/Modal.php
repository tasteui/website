<?php

namespace App\Enums\Examples\V2\Ui;

class Modal
{
    public const BASIC = <<<'HTML'
    <x-modal>
        TallStackUi
    </x-modal>
    HTML;

    public const TITLE = <<<'HTML'
    <x-modal>
        <x-slot:title>
            TallStackUi
        </x-slot:title>
        TallStackUi
    </x-modal>

    <!-- or -->

    <x-modal title="TallStackUi">
        TallStackUi
    </x-modal>
    HTML;

    public const FOOTER = <<<'HTML'
    <x-modal>
        TallStackUi
        <x-slot:footer>
            TallStackUi
        </x-slot:footer>
    </x-modal>

    <!-- or -->

    <x-modal footer="TallStackUi">
        TallStackUi
    </x-modal>
    HTML;

    public const BLUR = <<<'HTML'
    <!-- sm, md, lg, xl -->
    
    <x-modal title="TallStackUi" blur> <!-- sm blur -->
        TallStackUi
    </x-modal>
    HTML;

    public const SIZES = <<<'HTML'
    <!-- sm, md, lg, xl, 2xl, 3xl, 4xl, 5xl, 6xl, 7xl -->

    <x-modal title="TallStackUi" size="2xl">
        TallStackUi
    </x-modal>
    HTML;

    public const CENTER = <<<'HTML'
    <x-modal title="TallStackUi" center>
        TallStackUi
    </x-modal>
    HTML;

    public const Z_INDEX = <<<'HTML'
    <x-modal title="TallStackUi" z-index="z-10">
        TallStackUi
    </x-modal>
    HTML;

    public const PERSISTENT = <<<'HTML'
    <x-modal title="TallStackUi" persistent>
        TallStackUi
    </x-modal>
    HTML;

    public const WIREABLE = <<<'HTML'
    <!-- Livewire boolean property: $modal -->

    <x-modal title="TallStackUi" wire>
        TallStackUi
    </x-modal>

    <x-button wire:click="$toggle('modal')">
        Open
    </x-button>
    HTML;

    public const WIREABLE_CUSTOMIZED = <<<'HTML'
    <!-- Livewire boolean property: $tallstackui -->

    <x-modal title="TallStackUi" wire="tallstackui">
        TallStackUi
    </x-modal>

    <x-button wire:click="$toggle('tallstackui')">
        Open
    </x-button>
    HTML;

    public const ALPINEJS = <<<'HTML'
    <x-modal id="modal-id">
        TallStackUi
    </x-modal>

    <x-button x-on:click="$modalOpen('modal-id')">
        Open
    </x-button>

    <x-button x-on:click="$modalClose('modal-id')">
        Close
    </x-button>
    HTML;

    public const EVENTS = <<<'HTML'
    <x-modal title="TallStackUi"
             x-on:open="alert('Opened!')"
             x-on:close="alert('Closed!')">
        TallStackUi
    </x-modal>
    HTML;

    public const PERSONALIZATION = <<<'HTML'
    TallStackUi::personalize()
        ->modal()
        ->block('block', 'classes');
    HTML;
}
