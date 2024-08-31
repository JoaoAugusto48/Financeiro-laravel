<?php

namespace App\View\Components\Action\Button\Group;

use App\View\Components\Action\Button\Button;
use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class ButtonShow extends Button
{
    /**
     * Create a new component instance.
     */
    public function __construct($label = '', $url = '#', $class = 'info btn-sm')
    {
        parent::__construct($label,$url,$class,true);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.action.button.group.button-show');
    }
}
