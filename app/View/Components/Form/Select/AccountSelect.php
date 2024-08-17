<?php

namespace App\View\Components\Form\Select;

use App\Models\Account;
use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;

class AccountSelect extends Select
{
    /**
     * Summary of accounts
     * @var Account[]
     */
    public Collection $accounts;
    
    public function __construct($name = '', $label = '', $selected = '', $options = [], $required = false)
    {
        parent::__construct($name,$label,$selected,$required);
        $this->accounts = $options;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.select.account-select');
    }
}
