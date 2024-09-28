<?php

use Livewire\Volt\Component;

new class extends Component {
    public CONST LATEST = '2.x';

    public ?string $version = null;

    public function mount(): void
    {
        $this->version = self::LATEST;
    }

    public function updated(): void
    {
        if ($this->version === '2.x') {
            return;
        }

        redirect()->away('https://v1.tallstackui.com/docs');
    }
}; ?>

<div class="w-24">
    <x-select.native :options="['2.x', '1.x']" wire:model.live="version" />
</div>
