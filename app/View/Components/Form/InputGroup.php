<?php

namespace App\View\Components\Form;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class InputGroup extends Input
{
    public string $group;
    /**
     * Create a new component instance.
     */
    public function __construct($name, $label = '', $value = '', $placeholder = '', $type = 'text', $group = 'R$', $required = false)
    {
        parent::__construct($name,$label,$value,$placeholder,$type,$required);
        $this->group = $group;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.input-group');
    }
}
