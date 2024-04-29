<?php

namespace App\Enums\Examples\Ui;

class Rating
{
    public const PHP = <<<'HTML'
    use Livewire\Component;
    use Illuminate\Contracts\View\View;
    
    class Profile extends Component
    {
        public $rate = 2;
    
        public function render(): View
        {
            return view('livewire.profile');
        }
    
        public function evaluate(int $quantity): void
        {
            //
        }
    }
    HTML;

    public const BLADE = <<<'HTML'
    <!-- Manual -->
    <x-rating :$rate />

    <!-- Or binding using wire:model -->
    <x-rating wire:model="rate" />
    HTML;

    public const BASIC = <<<'HTML'
    <x-rating :$rate />

    <!-- You can bind using wire:model -->
    <x-rating wire:model="rate" />
    HTML;

    public const PERSONALIZATION = <<<'HTML'
    TallStackUi::personalize()
        ->rating()
        ->block('block', 'classes');
    HTML;
}
