<?php

namespace App\View\Components\Form;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class InputShow extends Component
{
    public string $label;
    public string $value;
    public string $class;

    public function __construct($value = '', $label = '', $class = 'form-control')
    {
        $this->label = $label;
        $this->value = $value;
        $this->class = $class;
    }
    
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.input-show');
    }
}
