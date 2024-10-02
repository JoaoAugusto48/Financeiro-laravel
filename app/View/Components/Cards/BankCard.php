<?php

namespace App\View\Components\Cards;

use App\Models\Bank;
use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class BankCard extends Component
{
    public Bank $bank;

    public function __construct($bank = [])
    {
        $this->bank = $bank;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.cards.bank-card');
    }
}
