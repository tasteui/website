<x-layout :torchlight="false">
    <x-slot:title>
        Floating Component
    </x-slot:title>
    <x-slot:description>
        The generic floating component used in: form date, form time, form
        password, form upload, form color, dropdown, and select styled.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:documentation.personalization :$personalization component="floating" />
    </x-slot:personalization>
    <x-internals-warning />
    <x-section class="mt-4">
        <p>
            <u>Starting from version 1.34.0</u> you can individually personalize the floating of each component.
            Each component that uses floating has a special <x-block>floating</x-block> that allows individual
            soft personalization of that component's floating. Here is the list of components that use floating:
        </p>
        <ul class="mt-2 list-decimal list-inside">
            <li><a href="{{ route('documentation.form.input') }}" wire:navigate>Form Date</a></li>
            <li><a href="{{ route('documentation.form.time') }}" wire:navigate>Form Time</a></li>
            <li><a href="{{ route('documentation.form.password') }}" wire:navigate>Form Password</a></li>
            <li><a href="{{ route('documentation.form.upload') }}" wire:navigate>Form Upload</a></li>
            <li><a href="{{ route('documentation.form.color') }}" wire:navigate>Form Color</a></li>
            <li><a href="{{ route('documentation.ui.dropdown') }}" wire:navigate>Dropdown</a></li>
            <li><a href="{{ route('documentation.form.select') }}" wire:navigate>Select</a></li>
        </ul>
    </x-section>
</x-layout>
