<?php

namespace App\View\Components\Form;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Radio extends Component
{
    public string $name;
    public string $label;
    public string $value;
    public string $options;
    public bool $required;

    public function __construct($name, $label = '', $value = '', $options = [], $required = false)
    {
        $this->name = $name;
        $this->label = $label;
        $this->value = $value;
        $this->options = $options;
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
