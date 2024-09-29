<?php

namespace App\View\Components\Form\Input;

use Carbon\Carbon;
use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Date extends Input
{
    
    public string $format;
    public string $max;

    public function __construct($name, $label = '', $value = '', $max = '', $required = false, $format = 'Y-m-d')
    {
        parent::__construct($name,$label,$value,'','date',$required);
        $this->format = $format;
        $this->max = $max;
    }
    
    public function formattedValue(): string
    {
        return Carbon::parse($this->value)->format($this->format);
    }

    public function formattedMax(): string
    {
        return Carbon::parse($this->max)->format($this->format);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.input.date');
    }
}
