@props([
    'p'           => null,
    'id'          => null,
    'new'         => null,
    'title'       => null,
    'anchor'      => null,
    'description' => null,
    'disableCopy' => null,
])

@php($anchor ??= str($title)->slug()->lower())

<section x-data="{ anchor : false, code : false }" id="{{ $anchor }}" {{ $attributes->merge(['class' => 'text-gray-600 mb-6 dark:text-slate-400']) }} @if ($id) id="{{ $id }}" @endif>
    @if ($title)
        <div @class(['flex items-center justify-between', 'mb-2' => $description === null])>
            @if ($title)
            <h2 @class(['text-xl tracking-tight text-pink-600 font-medium cursor-pointer', 'flex items-center gap-2' => $new]) x-on:mouseover="anchor = true" x-on:mouseleave="anchor = false">
                <a href="#{{ $anchor }}">
                    <span class="text-gray-400 dark:text-gray-400" x-show="anchor">#</span>
                    {{ $title }}
                </a>
                @if ($new)
                    <x-badge xs color="pink" light>NEW</x-badge>
                @endif
            </h2>
            @endif
            @if (!$disableCopy)
                <div class="flex rounded-md bg-transparent">
                    <button class="flex items-center gap-x-1 overflow-hidden rounded-md p-1 text-sm transition focus:outline-none sm:px-2"
                            :class="{
                        'text-pink-500 font-semibold': code,
                        'text-gray-400 dark:text-slate-300': !code
                    }" type="button" x-on:click="code = !code" x-cloak>
                        <x-icon name="code-bracket" solid class="text-gray-600 dark:text-slate-400 h-5 w-5" />
                    </button>
                </div>
            @endif
        </div>
    @endif
    @if ($description)
        <p class="text-sm text-slate-500 dark:text-slate-400 mb-4">{{ $description }}</p>
    @endif
    {!! $slot !!}
</section>
