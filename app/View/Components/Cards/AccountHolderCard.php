<?php

namespace App\View\Components\Cards;

use App\Models\AccountHolder;
use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class AccountHolderCard extends Card
{
    public AccountHolder $accountHolder;
    
    public function __construct($accountHolder = [])
    {
        $this->accountHolder = $accountHolder;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.cards.account-holder-card');
    }
}
