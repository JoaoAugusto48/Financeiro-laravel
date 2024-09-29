<?php

namespace App\View\Components\Form\Radio;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Show extends Component
{
    public string $label;
    public string $checked;

    public function __construct($label = '', $checked = '')
    {
        $this->label = $label;
        $this->checked = $checked;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.radio.show');
    }
}
