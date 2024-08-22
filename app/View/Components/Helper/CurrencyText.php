<?php

namespace App\View\Components\Helper;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Number;

class CurrencyText extends Component
{
    public float $value;
    
    public function __construct($value = '')
    {
        $this->value = $value;
    }

    public function formattedValue(): string
    {
        return Number::currency($this->value, in: 'BRL' , locale: 'BRL');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.helper.currency-text');
    }
}
