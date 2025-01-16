<?php

namespace App\View\Components;

use App\Traits\VersionDiscovery;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\File;
use Illuminate\View\Component;

class OnThisPage extends Component
{
    use VersionDiscovery;

    public function __construct(public ?array $contents = [], public ?bool $mobile = false)
    {
        $this->contents();
    }

    public function render(): View
    {
        return view('components.on-this-page');
    }

    private function contents(): void
    {
        Cache::remember($this->cacheKey(), now()->addMinutes(30), function (): void {
            // We start by getting the current URI and turning / into . to turn things like /docs/ui/button into docs.ui.button
            // Then we remove all versions of the URI to get the current page, like docs.ui.button instead of docs.v1.ui.button
            $index = str($this->uri())
                ->replace('/', '.')
                ->remove(collect($this->versions)->map(fn (string $version) => "{$version}.")->toArray())
                ->value();

            $file = File::json(base_path(sprintf('contents/on-this-page/%s.json', $this->version())));

            $content = $file[$index] ?? [];

            if (empty($content)) {
                return;
            }

            // If the first key is numeric, we know it's a flat array
            // For pages like /docs/ui/alert that doesn't contain any category.
            if (is_numeric(array_keys($content)[0])) {
                $this->contents = $this->flat($content);

                return;
            }

            // Otherwise, it's a nested array, for pages like /docs/ui/button
            // that contains button types like categories.
            $this->contents = $this->nested($content);
        });
    }

    private function flat(array $content): array
    {
        return collect($content)->mapWithKeys(function (string $item, int $key) {
            return $this->map($item, $key);
        })->toArray();
    }

    private function nested(array $content): array
    {
        return collect($content)->mapWithKeys(function (array $structure, string $parent) {
            return [
                $parent => collect($structure['contents'])->mapWithKeys(function (string $item, int $child) use ($parent, $structure) {
                    return $this->map($item, $child, $parent, $structure);
                }),
            ];
        })->toArray();
    }

    private function map(string $item, int $child, ?string $parent = null, ?array $structure = null): array
    {
        $data = [
            $child => [
                'title' => $item,
                'anchor' => str($item)->lower()->slug()->value(),
            ],
        ];

        // If is a nested array and has prefix, we add the prefix using the parent name
        // For situations like the button page, that contains two types of buttons.
        if ($parent && data_get($structure, 'prefix') === true) {
            $data[$child]['prefix'] = str($parent)->lower()
                ->replace(' ', '-')
                ->append('-')
                ->value();
        }

        return $data;
    }
}
