<?php

namespace App\View\Components\Action\button;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class StretchedLink extends Button
{
    public ?string $icon;

    public function __construct($label = 'Info', $url = '#', $class = 'outline-info btn-sm', $icon = null)
    {
        parent::__construct($label,$url,$class,true);
        $this->icon = $icon ?? null;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.action.button.stretched-link');
    }
}
