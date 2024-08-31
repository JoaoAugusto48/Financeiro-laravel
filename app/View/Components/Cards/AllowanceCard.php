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
    public TransactionEnum $transactionType;
    
    public function __construct($allowance = [])
    {
        $this->allowance = $allowance;
        $this->transactionType = TransactionEnum::Deposit;
    }

    public function borderColor(){
        if($this->allowance->kindTransaction == $this->transactionType->name){
            return 'border-success';
        }
        return 'border-danger';
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.cards.allowance-card');
    }
}
