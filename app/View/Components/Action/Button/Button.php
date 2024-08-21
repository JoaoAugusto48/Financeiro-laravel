<?php

namespace App\View\Components\Action\Button;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Button extends Component
{
    public string $type;
    public string $label;
    public string $url;
    public string $class;
    public bool $isLink;

    public function __construct($label = '', $url = '#', $class = 'primary', $isLink = false, $type = 'button')
    {
        $this->type = $type;
        $this->label = $label;
        $this->url = $url;
        $this->class = $class;
        $this->isLink = $isLink;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.action.button');
    }
}
