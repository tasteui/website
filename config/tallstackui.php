<?php

use TallStackUi\View\Components;

return [
    // ...

    /*
    |--------------------------------------------------------------------------
    | Component List
    |--------------------------------------------------------------------------
    |
    | List of all TallStackUI components.
    */
    'components' => [
        'alert' => Components\Alert::class,
        'avatar' => Components\Avatar::class,
        'badge' => Components\Badge::class,
        'banner' => Components\Banner::class,
        'boolean' => Components\Boolean::class,
        'button' => Components\Button\Button::class,
        'button.circle' => Components\Button\Circle::class,
        'carousel' => Components\Carousel::class,
        'card' => Components\Card::class,
        'checkbox' => Components\Form\Checkbox::class,
        'color' => Components\Form\Color::class,
        'clipboard' => Components\Clipboard::class,
        'date' => Components\Form\Date::class,
        'dialog' => Components\Interaction\Dialog::class,
        'dropdown' => Components\Dropdown\Dropdown::class,
        'dropdown.items' => Components\Dropdown\Items::class,
        'dropdown.submenu' => Components\Dropdown\Submenu::class,
        'environment' => Components\Environment::class,
        'error' => Components\Form\Error::class,
        'errors' => Components\Errors::class,
        'floating' => Components\Floating::class,
        'upload' => Components\Form\Upload::class,
        'hint' => Components\Form\Hint::class,
        'icon' => Components\Icon::class,
        'input' => Components\Form\Input::class,
        'label' => Components\Form\Label::class,
        // 'layout' => Components\Layout\Layout::class,
        // 'layout.header' => Components\Layout\Header::class,
        'link' => Components\Link::class,
        'loading' => Components\Loading::class,
        'modal' => Components\Modal::class,
        'number' => Components\Form\Number::class,
        'password' => Components\Form\Password::class,
        'pin' => Components\Form\Pin::class,
        'progress' => Components\Progress\Progress::class,
        'progress.circle' => Components\Progress\Circle::class,
        'radio' => Components\Form\Radio::class,
        'range' => Components\Form\Range::class,
        'rating' => Components\Rating::class,
        // 'side-bar' => Components\Layout\SideBar\SideBar::class,
        // 'side-bar.item' => Components\Layout\SideBar\Item::class,
        // 'side-bar.separator' => Components\Layout\SideBar\Separator::class,
        'select.native' => Components\Form\Select\Native::class,
        'select.styled' => Components\Form\Select\Styled::class,
        'signature' => Components\Signature::class,
        'slide' => Components\Slide::class,
        'stats' => Components\Stats::class,
        'step' => Components\Step\Step::class,
        'step.items' => Components\Step\Items::class,
        'tab' => Components\Tab\Tab::class,
        'tag' => Components\Form\Tag::class,
        'table' => Components\Table::class,
        'tab.items' => Components\Tab\Items::class,
        'textarea' => Components\Form\Textarea::class,
        'theme-switch' => Components\ThemeSwitch::class,
        'time' => Components\Form\Time::class,
        'toast' => Components\Interaction\Toast::class,
        'toggle' => Components\Form\Toggle::class,
        'tooltip' => Components\Tooltip::class,
        'reaction' => Components\Reaction::class,
        'wrapper.input' => Components\Wrapper\Input::class,
        'wrapper.radio' => Components\Wrapper\Radio::class,
    ],
];
