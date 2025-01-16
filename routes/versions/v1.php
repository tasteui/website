<?php

use App\Enums\Example;
use App\Http\Controllers\Documentation\Internal;
use Illuminate\Support\Facades\Route;

Route::view('/getting-started', 'documentation.v1.getting-started')->name('getting-started');
Route::view('/installation', 'documentation.v1.installation', Example::Installation->variables())->name('installation');
Route::view('/troubleshooting', 'documentation.v1.troubleshooting', Example::Troubleshooting->variables())->name('troubleshooting');
Route::view('/updates', 'documentation.v1.updates', Example::Updates->variables())->name('updates');
Route::view('/faq', 'documentation.v1.faq', Example::Updates->variables())->name('faq');
Route::view('/summer-release', 'documentation.v1.summer-release', Example::SummerRelease->variables())->name('summer-release');

Route::prefix('/form')
    ->name('form.')
    ->group(function () {
        Route::view('/input', 'documentation.v1.form.input', Example::Input->variables())->name('input');
        Route::view('/password', 'documentation.v1.form.password', Example::Password->variables())->name('password');
        Route::view('/color', 'documentation.v1.form.color', Example::Color->variables())->name('color');
        Route::view('/textarea', 'documentation.v1.form.textarea', Example::Textarea->variables())->name('textarea');
        Route::view('/number', 'documentation.v1.form.number', Example::Number->variables())->name('number');
        Route::view('/checkbox', 'documentation.v1.form.checkbox', Example::Checkbox->variables())->name('checkbox');
        Route::view('/radio', 'documentation.v1.form.radio', Example::Radio->variables())->name('radio');
        Route::view('/tag', 'documentation.v1.form.tag', Example::Tag->variables())->name('tag');
        Route::view('/toggle', 'documentation.v1.form.toggle', Example::Toggle->variables())->name('toggle');
        Route::view('/range', 'documentation.v1.form.range', Example::Range->variables())->name('range');
        Route::view('/pin', 'documentation.v1.form.pin', Example::Pin->variables())->name('pin');
        Route::view('/upload', 'documentation.v1.form.upload', Example::Upload->variables())->name('upload');
        Route::view('/select', 'documentation.v1.form.select', Example::Select->variables())->name('select');
        Route::view('/date', 'documentation.v1.form.date', Example::Date->variables())->name('date');
        Route::view('/time', 'documentation.v1.form.time', Example::Time->variables())->name('time');
    });

Route::prefix('/ui')
    ->name('ui.')
    ->group(function () {
        Route::view('/alert', 'documentation.v1.ui.alert', Example::Alert->variables())->name('alert');
        Route::get('/avatar', function () {
            // We need to auth the user to be able to use `auth()->user()` in the view.
            auth()->loginUsingId(1);

            return view('documentation.ui.avatar', Example::Avatar->variables());
        })->name('avatar');
        Route::view('/badge', 'documentation.v1.ui.badge', Example::Badge->variables())->name('badge');
        Route::view('/banner', 'documentation.v1.ui.banner', Example::Banner->variables())->name('banner');
        Route::view('/boolean', 'documentation.v1.ui.boolean', Example::Boolean->variables())->name('boolean');
        Route::view('/button', 'documentation.v1.ui.button', Example::Button->variables())->name('button');
        Route::view('/card', 'documentation.v1.ui.card', Example::Card->variables())->name('card');
        Route::view('/clipboard', 'documentation.v1.ui.clipboard', Example::Clipboard->variables())->name('clipboard');
        Route::view('/dropdown', 'documentation.v1.ui.dropdown', Example::Dropdown->variables())->name('dropdown');
        Route::view('/error', 'documentation.v1.ui.error', Example::Error->variables())->name('error');
        Route::view('/icon', 'documentation.v1.ui.icon', Example::Icon->variables())->name('icon');
        Route::view('/modal', 'documentation.v1.ui.modal', Example::Modal->variables())->name('modal');
        Route::view('/link', 'documentation.v1.ui.link', Example::Link->variables())->name('link');
        Route::view('/loading', 'documentation.v1.ui.loading', Example::Loading->variables())->name('loading');
        Route::view('/progress', 'documentation.v1.ui.progress', Example::Progress->variables())->name('progress');
        Route::view('/reaction', 'documentation.v1.ui.reaction', Example::Reaction->variables())->name('reaction');
        Route::view('/rating', 'documentation.v1.ui.rating', Example::Rating->variables())->name('rating');
        Route::view('/slide', 'documentation.v1.ui.slide', Example::Slide->variables())->name('slide');
        Route::view('/stats', 'documentation.v1.ui.stats', Example::Stats->variables())->name('stats');
        Route::view('/step', 'documentation.v1.ui.step', Example::Step->variables())->name('step');
        Route::view('/tab', 'documentation.v1.ui.tab', Example::Tab->variables())->name('tab');
        Route::view('/table', 'documentation.v1.ui.table', Example::Table->variables())->name('table');
        Route::view('/theme-switch', 'documentation.v1.ui.theme-switch', Example::ThemeSwitch->variables())->name('theme-switch');
        Route::view('/tooltip', 'documentation.v1.ui.tooltip', Example::Tooltip->variables())->name('tooltip');
    });

Route::prefix('/interaction')
    ->name('interaction.')
    ->group(function () {
        Route::view('/dialog', 'documentation.v1.interactions.dialog', Example::Dialog->variables())->name('dialog');
        Route::view('/toast', 'documentation.v1.interactions.toast', Example::Toast->variables())->name('toast');
    });

Route::controller(Internal::class)
    ->prefix('/internal')
    ->name('internal.')
    ->group(function () {
        Route::get('/error', 'index')->name('error');
        Route::get('/hint', 'hint')->name('hint');
        Route::get('/label', 'label')->name('label');
        Route::get('/wrapper', 'wrapper')->name('wrapper');
        Route::get('/floating', 'floating')->name('floating');
    });

Route::view('/dark-theme', 'documentation.v1.helpers.dark-theme', Example::DarkTheme->variables())->name('dark-theme');
Route::view('/configuration', 'documentation.v1.configuration', Example::Configuration->variables())->name('configuration');
Route::view('/command', 'documentation.v1.command', Example::Command->variables())->name('command');
Route::view('/translation', 'documentation.v1.translation', Example::Translation->variables())->name('translation');
Route::view('/without-livewire', 'documentation.v1.without-livewire', Example::WithoutLivewire->variables())->name('without-livewire');
Route::view('/contribution', 'documentation.v1.contribution', Example::Contribution->variables())->name('contribution');
Route::view('/debug', 'documentation.v1.helpers.debug', Example::DebugMode->variables())->name('debug');

Route::prefix('/personalization')
    ->name('personalization.')
    ->group(function () {
        Route::view('/concept', 'documentation.v1.personalization.concept')->name('concept');
        Route::view('/color', 'documentation.v1.personalization.color', Example::ColorPersonalization->variables())->name('color');
        Route::view('/soft', 'documentation.v1.personalization.soft', Example::SoftPersonalization->variables())->name('soft');
        Route::view('/deep', 'documentation.v1.personalization.deep', Example::DeepPersonalization->variables())->name('deep');
    });

Route::prefix('/integrations')
    ->name('integrations.')
    ->group(function () {
        Route::view('/alpine', 'documentation.v1.integrations.alpine', Example::Alpine->variables())->name('alpine');
    });
