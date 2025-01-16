@if ($version === 'v2')
<x-banner :color="['background' => 'bg-pink-900', 'text' => 'text-white']">
    <b class="underline">V2 is in public beta!</b> 🎉 Report any issues on the repository.
</x-banner>
@else
    <x-banner :color="['background' => 'bg-red-600', 'text' => 'text-white']">
        <b class="underline">WARNING!</b> You are browsing the docs for an old version of TallStackUI!
    </x-banner>
@endif
