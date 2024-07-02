<x-banner :color="['background' => 'bg-pink-900', 'text' => 'text-white']"
          :until="now()->addWeek()">
    <b>New version 1.30.0 is now available</b> 🎉
    <a class="underline" href="{{ route('documentation.command').'#find-component' }}" wire:navigate>Introducing a useful command to search for component usage.</a>
</x-banner>
