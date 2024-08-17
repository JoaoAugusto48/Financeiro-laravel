<?php

namespace App\View\Components\Form\Input;

use Carbon\Carbon;
use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class InputDate extends Input
{
    
    public string $format;

    public function __construct($name, $label = '', $value = '', $required = false, $format = 'Y-m-d')
    {
        parent::__construct($name,$label,$value,'','date',$required);
        $this->format = $format;
    }
    
    public function formattedValue(): string
    {
        return Carbon::parse($this->value)->format($this->format);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.input.input-date');
    }
}
