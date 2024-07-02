<x-banner :color="['background' => 'bg-pink-900', 'text' => 'text-white']"
          :until="now()->addDays(2)">
    <b>Version 1.32.0 is here</b> 🎉
    <a class="underline" href="{{ route('documentation.ui.button').'#normal-flat-variations' }}">Introduced Flat buttons, for normal and circle buttons.</a>
</x-banner>
