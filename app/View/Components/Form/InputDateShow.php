<?php

namespace App\View\Components\Form;

use Carbon\Carbon;
use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class InputDateShow extends InputShow
{
    public string $format;
    
    public function __construct($value = '', $label = '', $class = '', $format = 'Y-m-d')
    {
        parent::__construct($value,$label,$class);
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
        return view('components.form.input-date-show');
    }
}
