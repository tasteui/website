@php
    foreach (apply_prefix($__data) as $key => $value) $$key = $value;
@endphp

<x-layout>
    <x-slot:title>
        Configurations
    </x-slot:title>
    <x-slot:description>
        TallStackUI configurations.
    </x-slot:description>
    <x-section title="Concept" disable-copy>
        <p>
            TallStackUI offers a configuration file that allows you to control several things, in addition to
            listing all available components for possible personalization, something we will talk about later.
            Use this file to configure some things about certain components.
        </p>
        <p class="mt-4">Run the following command to publish the configuration file:</p>
        <x-code language="shell" :contents="$command"/>
    </x-section>
</x-layout>
