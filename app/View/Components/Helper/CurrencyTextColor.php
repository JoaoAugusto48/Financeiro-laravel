<?php

namespace App\View\Components\Helper;

use App\Enums\TransactionEnum;
use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Number;

class CurrencyTextColor extends Component
{
    public string $value;
    
    public function __construct($value = '')
    {
        $this->value = $value;
    }

    public function textClass(): string
    {
        $class = '';
        if($this->value == TransactionEnum::REVENUE->name) {
            $class = 'text-success';
        } elseif ($this->value == TransactionEnum::EXPENSE->name) {
            $class = 'text-danger';
        } else {
            if($this->value > 0) {
                $class = 'text-success';
            } elseif ($this->value < 0) {
                $class = 'text-danger';
            } else {
                $class= 'text-secondary';
            }
        }

        return $class;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.helper.currency-text-color');
    }
}
