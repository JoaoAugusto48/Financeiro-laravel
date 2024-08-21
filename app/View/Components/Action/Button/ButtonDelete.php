<?php

namespace App\View\Components\Action\Button;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class ButtonDelete extends Button
{
    /**
     * Create a new component instance.
     */    
    public function __construct($label = 'Delete', $url = '#', $class = 'danger',)
    {
        parent::__construct($label,$url,$class,false,'submit');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.action.button.button-delete');
    }
}
