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
        <p>
            The logic for persisting the rating in a database, such as SQL, SQLite or Redis (cache)
            is up to its own algorithm. <b>If, for example, you don't create logic, especially one that
                blocks many rating from the same authenticated user, the user will rating unlimitedly.</b>
            When a star is pressed, the <x-block>evaluate</x-block> method is triggered, receiving the
            quantity of rating as a parameter. Let's take a look at an example:
        </p>
        <x-code :contents="$php" />
        <x-code :contents="$blade" language="blade" />
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
