<?php

namespace App\View\Components\Form\Input;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Input extends Component
{
    public ?string $type;
    public string $name;
    public string $label;
    public string $value;
    public string $placeholder;
    public bool $required;
    public string $class;
    
    public function __construct($name, $label = '', $value = '', $placeholder = '', $type = 'text', $required = false, $class = 'form-control')
    {
        $this->type = $type;
        $this->name = $name;
        $this->label = $label;
        $this->value = $value;
        $this->placeholder = $placeholder;
        $this->required = $required;
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.input');
    }
}
