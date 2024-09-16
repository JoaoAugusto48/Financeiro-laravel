<?php

namespace App\View\Components\Helper\Text;

use App\Models\Account as ModelsAccount;
use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Account extends Component
{
    public ModelsAccount $account;
    
    public function __construct($account = '')
    {
        $this->account = $account;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.helper.text.account');
    }
}
