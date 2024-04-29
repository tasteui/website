@php
    foreach (apply_prefix($__data) as $key => $value) $$key = $value;
@endphp

<x-layout>
    <x-slot:title>
        Rating
        <x-slot:version>
            v1.25
        </x-slot:version>
    </x-slot:title>
    <x-slot:description>
        Rating component.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:documentation.personalization :$personalization component="rating" />
    </x-slot:personalization>
    <x-section title="Persist Rating">
        <x-preview language="blade" :contents="$basic">
            //
        </x-preview>
    </x-section>
    <x-section title="Basic Usage">
        <x-preview language="blade" :contents="$basic">
            <livewire:documentation.ui.rating />
        </x-preview>
    </x-section>
    <x-section title="Star Quantity">
        <x-preview language="blade" :contents="$basic">
            <livewire:documentation.ui.rating :model="2" />
        </x-preview>
    </x-section>
    <x-section title="Label">
        <x-preview language="blade" :contents="$basic">
            <livewire:documentation.ui.rating :model="3" />
        </x-preview>
    </x-section>
    <x-section title="Size Variations">
        <x-preview language="blade" :contents="$basic">
            <livewire:documentation.ui.rating :model="4" />
        </x-preview>
    </x-section>
    <x-section title="Color Variations">
        <x-preview language="blade" :contents="$basic">
            <livewire:documentation.ui.rating :model="5" />
        </x-preview>
    </x-section>
</x-layout>
