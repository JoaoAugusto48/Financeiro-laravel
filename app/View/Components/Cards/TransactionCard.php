<?php

namespace App\View\Components\Cards;

use App\Models\Transaction;
use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class TransactionCard extends Card
{
    public Transaction $transaction;
    public string $kindDeposit;
    
    public function __construct($transaction = [], $kindDeposit = '')
    {
        $this->transaction = $transaction;
        $this->kindDeposit = $kindDeposit;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.cards.transaction-card');
    }
}
