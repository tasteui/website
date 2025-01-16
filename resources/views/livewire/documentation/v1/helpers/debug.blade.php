<?php

use Livewire\Volt\Component;

new class extends Component {
    public ?string $personalization = null;

    public function mount(): void
    {
        config()->set('tallstackui.debug.status', true);

        config()->set('tallstackui.debug.environments', ['local', 'production']);
    }

    public function rendered(): void
    {
        config()->set('tallstackui.debug.status', false);
    }
} ?>

<div class="mt-4 flex justify-center">
    <x-button text="This is the TallStackUI" color="purple" icon="photo" position="right" id="example" />
</div>
