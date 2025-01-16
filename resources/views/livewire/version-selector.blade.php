<?php

use function Livewire\Volt\{state, uses};
use App\Traits\VersionDiscovery;
use Illuminate\Support\Facades\Cookie;

uses(VersionDiscovery::class);

state(['version' => fn() => $this->current()]);

$change = function (): void {
    redirect()->away(route('documentation.' . $this->version . '.getting-started'));

    Cookie::queue(Cookie::forever('version', $this->version));
};
?>

<div>
    <x-select.native :options="[
        ['label' => 'Version 2.x', 'value' => 'v2'],
        ['label' => 'Version 1.x', 'value' => 'v1'],
    ]" wire:model="version" wire:change="change"/>
</div>
