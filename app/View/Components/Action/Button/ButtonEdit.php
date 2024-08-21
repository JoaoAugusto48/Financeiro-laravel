<?php

namespace App\View\Components\Action\Button;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class ButtonEdit extends Button
{
    /**
     * Create a new component instance.
     */
    public function __construct($label = 'Edit', $url = '#', $class = 'warning',)
    {
        parent::__construct($label,$url,$class,true);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.action.button.button-edit');
    }
}
