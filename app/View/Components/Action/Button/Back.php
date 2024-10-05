<?php

namespace App\View\Components\Action\Button;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Back extends Button
{
    /**
     * Create a new component instance.
     */
    public function __construct($label = 'Back', $url = '', $class = 'info text-black-50')
    {
        parent::__construct($label,$url,$class,true);
    }

    public function historyBack(): string
    {
        return ($this->url == '') ? 'javascript:history.back()' : $this->url;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.action.button.back');
    }
}
