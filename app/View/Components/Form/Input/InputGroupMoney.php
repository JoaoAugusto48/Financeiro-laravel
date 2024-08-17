<?php

namespace App\View\Components\Form\Input;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class InputGroupMoney extends InputGroup
{
    
    public function __construct($name,$label = '',$value = '0.00',$required = '')
    {
        parent::__construct($name,$label,'0.00',group: 'R$', required: $required);
        if($value !== '') {
            $this->value = $value;
        }
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.input.input-group-money');
    }
}
