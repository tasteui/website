<x-alert title="WARNING!" color="red">
    {{ $slot->isEmpty() ? '2.x is in public beta while we gather community feedback.' : $slot }}
</x-alert>
