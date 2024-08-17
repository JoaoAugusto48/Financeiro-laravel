<?php

namespace App\View\Components\Form\Radio;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Radio extends Component
{
    public string $name;
    public string $label;
    public string $checked;
    public bool $required;

    public function __construct($name, $label = '', $checked = '', $required = false)
    {
        $this->name = $name;
        $this->label = $label;
        $this->checked = $checked;
        $this->required = $required;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.radio');
    }
}
