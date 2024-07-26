@props([
    'id' => uniqid(),
    'contents' => null,
    'title' => null,
    'description' => null,
    'anchor' => null,
    'numbers' => false,
    'background' => true,
    'language' => 'php',
    'disableCopy' => false,
])

@php($anchor ??= str($title)->slug()->lower())

<div x-data="{ anchor : false }" @if ($id) id="{{ $id }}" @endif>
    <div x-show="!code" @class(['rounded-lg p-6', 'bg-white shadow-md dark:bg-slate-800/50' => $background])>
        {{ $slot }}
    </div>
    @if ($contents)
        <div class="overflow-auto custom-scrollbar rounded-lg bg-[#292D3E]" x-cloak x-show="code">
            <x-code :language="$language" :$contents :$disableCopy />
        </div>
    @endif
</div>
