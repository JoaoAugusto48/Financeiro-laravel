<?php

namespace App\View\Components\Cards;

use App\Enums\TransactionEnum;
use App\Models\Allowance;
use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Number;

class AllowanceCard extends Card
{
    public Allowance $allowance;
    
    public function __construct($allowance = [], $class = '')
    {
        parent::__construct($class);
        $this->allowance = $allowance;
    }

    public function formattedValue(): string
    {
        return Number::currency($this->allowance->value, in: 'BRL' , locale: 'BRL');
    }

    public function textClass(): string
    {
        $class = '';
        if($this->allowance->kindTransaction == TransactionEnum::Deposit->name) {
            $class = 'text-success';
        } elseif ($this->allowance->kindTransaction == TransactionEnum::Withdraw->name) {
            $class = 'text-danger';
        }

        return $class;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.cards.allowance-card');
    }
}
