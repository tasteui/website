<?php

use Database\Seeders\CreateUserSeeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;

beforeEach(function () {
    Http::fake(['api.torchlight.dev/*' => []]);
    Http::fake(['api.github.com/*' => []]);

    $this->seed(CreateUserSeeder::class);
});

test('cannot use dangerous functions')
    ->expect(['dd', 'dump', 'var_dump', 'exit'])
    ->not
    ->toBeUsed();

test('cannot not use dangerous functions in Blade files', function () {
    $files = collect(File::allFiles(base_path('resources/views/')))
        ->map(fn (SplFileInfo $file) => ['name' => $file->getFilename(), 'content' => file_get_contents($file->getRealPath())])
        ->filter(fn (array $file) => str($file['content'])->contains(['@dd', '@dump']))
        ->pluck('name')
        ->implode(', ');

    if (! empty($files)) {
        test()->fail("The following files contain dangerous functions: [{$files}]"); // @phpstan-ignore-line
    }

    expect($files)->toBeEmpty();
});

test('can access all routes', function (string $route) {
    $this->get($route)->assertOk();
})->with([
    fn () => route('documentation.v1.getting-started'),
    fn () => route('documentation.v1.installation'),
    fn () => route('documentation.v1.troubleshooting'),
    fn () => route('documentation.v1.updates'),
    fn () => route('documentation.v1.faq'),
    fn () => route('documentation.v1.summer-release'),
    //
    fn () => route('documentation.v1.form.input'),
    fn () => route('documentation.v1.form.password'),
    fn () => route('documentation.v1.form.color'),
    fn () => route('documentation.v1.form.textarea'),
    fn () => route('documentation.v1.form.number'),
    fn () => route('documentation.v1.form.checkbox'),
    fn () => route('documentation.v1.form.radio'),
    fn () => route('documentation.v1.form.tag'),
    fn () => route('documentation.v1.form.toggle'),
    fn () => route('documentation.v1.form.range'),
    fn () => route('documentation.v1.form.pin'),
    fn () => route('documentation.v1.form.upload'),
    fn () => route('documentation.v1.form.date'),
    fn () => route('documentation.v1.form.time'),
    fn () => route('documentation.v1.form.select'),
    //
    fn () => route('documentation.v1.ui.alert'),
    fn () => route('documentation.v1.ui.avatar'),
    fn () => route('documentation.v1.ui.badge'),
    fn () => route('documentation.v1.ui.banner'),
    fn () => route('documentation.v1.ui.boolean'),
    fn () => route('documentation.v1.ui.button'),
    fn () => route('documentation.v1.ui.card'),
    fn () => route('documentation.v1.ui.clipboard'),
    fn () => route('documentation.v1.ui.dropdown'),
    fn () => route('documentation.v1.ui.error'),
    fn () => route('documentation.v1.ui.icon'),
    fn () => route('documentation.v1.ui.modal'),
    fn () => route('documentation.v1.ui.link'),
    fn () => route('documentation.v1.ui.loading'),
    fn () => route('documentation.v1.ui.progress'),
    fn () => route('documentation.v1.ui.reaction'),
    fn () => route('documentation.v1.ui.rating'),
    fn () => route('documentation.v1.ui.slide'),
    fn () => route('documentation.v1.ui.stats'),
    fn () => route('documentation.v1.ui.step'),
    fn () => route('documentation.v1.ui.tab'),
    fn () => route('documentation.v1.ui.table'),
    fn () => route('documentation.v1.ui.theme-switch'),
    fn () => route('documentation.v1.ui.tooltip'),
    //
    fn () => route('documentation.v1.interaction.dialog'),
    fn () => route('documentation.v1.interaction.toast'),
    //
    fn () => route('documentation.v1.internal.error'),
    fn () => route('documentation.v1.internal.hint'),
    fn () => route('documentation.v1.internal.floating'),
    fn () => route('documentation.v1.internal.label'),
    fn () => route('documentation.v1.internal.wrapper'),
    //
    fn () => route('documentation.v1.configuration'),
    fn () => route('documentation.v1.command'),
    fn () => route('documentation.v1.translation'),
    fn () => route('documentation.v1.without-livewire'),
    //
    fn () => route('documentation.v1.personalization.concept'),
    fn () => route('documentation.v1.personalization.soft'),
    fn () => route('documentation.v1.personalization.deep'),
    fn () => route('documentation.v1.personalization.color'),
    //
    fn () => route('documentation.v1.dark-theme'),
    fn () => route('documentation.v1.debug'),
    fn () => route('documentation.v1.integrations.alpine'),
    //
    fn () => route('documentation.v1.contribution'),
]);
