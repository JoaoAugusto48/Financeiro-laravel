<?php

namespace App\View\Components\Action\Button;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Save extends Button
{
    /**
     * Create a new component instance.
     */
    public function __construct($label = 'Save', $class = 'success')
    {
        parent::__construct($label, class: $class, isLink: false, type: 'submit');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.action.button.save');
    }
}
