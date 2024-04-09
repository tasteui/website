<?php

use Illuminate\Support\Facades\Cookie;

if (! function_exists('apply_prefix')) {
    function apply_prefix(array $data): array
    {
        if (($prefix = Cookie::get('prefix')) === null) {
            return $data;
        }

        return collect($data)
            ->filter(fn ($value) => is_string($value))
            ->filter(fn ($value) => str_contains($value, '<x-'))
            ->mapWithKeys(function (string $value, string $key) use ($prefix) {
                $value = preg_replace_callback('/<\/?x-(?![sS]lot:)([^>]*)>/', function ($matches) use ($prefix) {
                    return "<x-{$prefix}{$matches[1]}>";
                }, $value);

                return [$key => $value];
            })
            ->toArray();
    }
}
