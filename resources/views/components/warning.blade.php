@props(['text' => null])

@php($text ??= $slot->toHtml())

<div {{ $attributes }}>
    <x-alert color="red" icon="exclamation-circle" light>
        {!! $text !!}
    </x-alert>
</div>
