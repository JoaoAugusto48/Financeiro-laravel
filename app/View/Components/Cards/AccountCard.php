<?php

namespace App\View\Components\Cards;

use App\Models\Account;
use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Number;

class AccountCard extends Card
{
    public Account $account;
    
    public function __construct($account = [])
    {
        $this->account = $account;
    }

    public function formattedBalance(): string
    {
        return Number::currency($this->account->balance, in: 'BRL' , locale: 'BRL');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.cards.account-card');
    }
}
