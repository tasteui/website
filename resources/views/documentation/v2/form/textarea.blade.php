@php
    foreach (apply_prefix($__data) as $key => $value) $$key = $value;
@endphp

<x-layout>
    <x-slot:title>
        Form Textarea
    </x-slot:title>
    <x-slot:description>
        Form textarea component.
    </x-slot:description>
    <x-slot:personalization>
        <livewire:documentation.v1.personalization :$personalization component="textarea" />
    </x-slot:personalization>
    <x-section title="Basic Usage">
        <x-preview language="blade" :contents="$basic">
            <x-textarea />
        </x-preview>
    </x-section>
    <x-section title="Label & Hint">
        <x-preview language="blade" :contents="$labelHint">
            <x-textarea label="Name" hint="Insert the description" />
        </x-preview>
    </x-section>
    <x-section title="Required Label Indicator" description="An option to display an asterisk indicating that the field is required.">
        <x-preview language="blade" :contents="$asterisk">
            <x-textarea label="Description *" />
        </x-preview>
    </x-section>
    <x-section title="Resize">
        <x-preview language="blade" :contents="$resize">
            <x-textarea resize />
        </x-preview>
    </x-section>
    <x-section title="Resize Auto" description="An option to auto increase the size of textarea.">
        <x-preview language="blade" :contents="$resizeAuto">
            <x-textarea resize-auto />
        </x-preview>
    </x-section>
    <x-section title="Character Count" description="An option to show the number of characters.">
        <x-preview language="blade" :contents="$count">
            <div class="mb-2 space-y-2">
                <x-textarea label="Current and Max Quantities" maxlength="10" count />
                <x-textarea label="Only Current Quantity" count />
            </div>
        </x-preview>
    </x-section>
    <x-section title="Invalidate" description="An option to not show validation error message.">
        <x-preview language="blade" :contents="$invalidate">
            <x-textarea label="Name" hint="Insert the description" invalidate />
        </x-preview>
    </x-section>
</x-layout>
