<?php

namespace App\Enums\Examples\Form;

class WithoutLivewire
{
    public const EXAMPLE = <<<'HTML'
    <form action="{{ route('user.register') }}" method="post">
        @csrf

        <x-input label="Name" name="input" :value="old('name')" />

        <x-password label="Password" name="pass" :value="old('pass')" />

        <x-textarea label="Description" name="textarea" :value="old('textarea')" />

        <x-number label="Quantity of Users" name="number" :value="old('number')" />

        <x-pin label="Security Code" length="4" name="pin" :value="old('pin')" />

        <x-color label="Favorite Color" name="color" :value="old('color')" />

        <x-range label="Minimum Quantity" name="range" :value="old('range')" />

        <x-checkbox label="Accept the Terms" name="checkbox" :value="old('checkbox')" />

        <x-radio label="Receive Notification" name="radio" :value="old('radio')" />

        <x-toggle label="Enable Notifications" name="toggle" :value="old('toggle')" />

        <x-select.styled :options="['TALL', 'LIVT']"
                         select="label:label|value:value"
                         label="Select One Option"
                         name="select_options"
                         searchable
                         :value="old('select_options')" />

        <x-select.styled :request="route('api.users')"
                         select="label:name|value:id"
                         label="Search User Through API"
                         name="search_api"
                         :value="old('search_api')" />

        <x-button type="submit">
            Submit
        </x-button>

    </form>
    HTML;
}
