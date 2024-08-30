<?php

namespace App\View\Components\Cards;

use App\Models\Account;
use App\Models\Allowance;
use App\Models\Transaction;
use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;

class RelatedCard extends Component
{
    /**
     * @var Account[]
     */
    public Collection $accounts;
    /**
     * @var Allowance[]
     */
    public Collection $allowances;
    /**
     * @var Transaction[]
     */
    public Collection $transactions;
    
    public function __construct($accounts = [], $allowances = [], $transactions = [])
    {
        $this->accounts = $accounts;
        $this->allowances = $allowances;
        $this->transactions = $transactions;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.cards.related-card');
    }
}
