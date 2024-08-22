<?php

namespace App\View\Components\Helper;

use Carbon\Carbon;
use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class DateText extends Component
{
    public string $value;
    public string $format;
    
    public function __construct($value = '', $format = 'Y-m-d')
    {
        $this->value = $value;
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
        return view('components.helper.date-text');
    }
}
