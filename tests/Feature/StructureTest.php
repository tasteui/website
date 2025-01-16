<?php

use Database\Seeders\CreateUserSeeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;

beforeEach(function () {
    fakeTorchlight();

    Http::fake(['api.github.com/*' => Http::response([])]);

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
    fn () => route('v1.documentation.get-started'),
    fn () => route('v1.documentation.installation'),
    fn () => route('v1.documentation.troubleshooting'),
    fn () => route('v1.documentation.updates'),
    fn () => route('v1.documentation.faq'),
    fn () => route('v1.documentation.summer-release'),
    //
    fn () => route('v1.documentation.form.input'),
    fn () => route('v1.documentation.form.password'),
    fn () => route('v1.documentation.form.color'),
    fn () => route('v1.documentation.form.textarea'),
    fn () => route('v1.documentation.form.number'),
    fn () => route('v1.documentation.form.checkbox'),
    fn () => route('v1.documentation.form.radio'),
    fn () => route('v1.documentation.form.tag'),
    fn () => route('v1.documentation.form.toggle'),
    fn () => route('v1.documentation.form.range'),
    fn () => route('v1.documentation.form.pin'),
    fn () => route('v1.documentation.form.upload'),
    fn () => route('v1.documentation.form.date'),
    fn () => route('v1.documentation.form.time'),
    fn () => route('v1.documentation.form.select'),
    //
    fn () => route('v1.documentation.ui.alert'),
    fn () => route('v1.documentation.ui.avatar'),
    fn () => route('v1.documentation.ui.badge'),
    fn () => route('v1.documentation.ui.banner'),
    fn () => route('v1.documentation.ui.boolean'),
    fn () => route('v1.documentation.ui.button'),
    fn () => route('v1.documentation.ui.card'),
    fn () => route('v1.documentation.ui.clipboard'),
    fn () => route('v1.documentation.ui.dropdown'),
    fn () => route('v1.documentation.ui.error'),
    fn () => route('v1.documentation.ui.icon'),
    fn () => route('v1.documentation.ui.modal'),
    fn () => route('v1.documentation.ui.link'),
    fn () => route('v1.documentation.ui.loading'),
    fn () => route('v1.documentation.ui.progress'),
    fn () => route('v1.documentation.ui.reaction'),
    fn () => route('v1.documentation.ui.rating'),
    fn () => route('v1.documentation.ui.slide'),
    fn () => route('v1.documentation.ui.stats'),
    fn () => route('v1.documentation.ui.step'),
    fn () => route('v1.documentation.ui.tab'),
    fn () => route('v1.documentation.ui.table'),
    fn () => route('v1.documentation.ui.theme-switch'),
    fn () => route('v1.documentation.ui.tooltip'),
    //
    fn () => route('v1.documentation.interaction.dialog'),
    fn () => route('v1.documentation.interaction.toast'),
    //
    fn () => route('v1.documentation.internal.error'),
    fn () => route('v1.documentation.internal.hint'),
    fn () => route('v1.documentation.internal.floating'),
    fn () => route('v1.documentation.internal.label'),
    fn () => route('v1.documentation.internal.wrapper'),
    //
    fn () => route('v1.documentation.configuration'),
    fn () => route('v1.documentation.command'),
    fn () => route('v1.documentation.translation'),
    fn () => route('v1.documentation.without-livewire'),
    //
    fn () => route('v1.documentation.personalization.concept'),
    fn () => route('v1.documentation.personalization.soft'),
    fn () => route('v1.documentation.personalization.deep'),
    fn () => route('v1.documentation.personalization.color'),
    //
    fn () => route('v1.documentation.dark-theme'),
    fn () => route('v1.documentation.debug'),
    fn () => route('v1.documentation.integrations.alpine'),
    //
    fn () => route('v1.documentation.contribution'),
]);
