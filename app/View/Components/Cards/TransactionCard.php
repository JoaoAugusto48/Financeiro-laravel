<?php

namespace App\View\Components\Cards;

use App\Enums\TransactionEnum;
use App\Models\Transaction;
use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class TransactionCard extends Card
{
    public Transaction $transaction;
    
    public function __construct($transaction = [])
    {
        $this->transaction = $transaction;
    }

    public function borderColor()
    {
        if($this->transaction->kindTransaction == TransactionEnum::REVENUE->name){
            return 'border-success';
        }
        return 'border-danger';
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.cards.transaction-card');
    }
}
