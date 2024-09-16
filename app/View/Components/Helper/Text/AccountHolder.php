<?php

namespace App\View\Components\Helper\Text;

use App\Models\AccountHolder as ModelsAccountHolder;
use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class AccountHolder extends Component
{
    public ModelsAccountHolder $accountHolder;
    
    public function __construct($accountHolder = '')
    {
        $this->accountHolder = $accountHolder;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.helper.text.account-holder');
    }
}
