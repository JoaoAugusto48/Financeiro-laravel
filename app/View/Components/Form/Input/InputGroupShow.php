<?php

namespace App\View\Components\Form\Input;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Number;

class InputGroupShow extends InputShow
{
    public string $group;
    
    public function __construct($value = '', $label = '', $group = '-', $class = '')
    {
        parent::__construct($this->valueFormat($value),$label,'form-control' . $class);
        $this->group = $group;
    }

    private function valueFormat($value): int|string
    {
        if(is_numeric($value)) {
            $value = Number::format($value, precision: 2, locale: 'BRL');
        }
        return $value;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.input.input-group-show');
    }
}
