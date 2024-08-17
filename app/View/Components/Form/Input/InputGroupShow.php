<?php

namespace App\View\Components\Form\Input;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class InputGroupShow extends InputShow
{
    public string $group;
    
    public function __construct($value = '', $label = '', $group = '-', $class = '')
    {
        parent::__construct($value,$label,'form-control' . $class);
        $this->group = $group;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.input.input-group-show');
    }
}
