<?php

namespace App\View\Components\Form\Input;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Show extends Component
{
    public string $label;
    public string $value;
    public string $class;

    public function __construct($value = '', $label = '', $class = '')
    {
        $this->label = $label;
        $this->value = $value;
        $this->class = 'form-control ' . $class;
    }
    
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.input.show');
    }
}
