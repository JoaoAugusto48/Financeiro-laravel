<?php

namespace App\View\Components\Helper\Text;

use App\Enums\TransactionEnum;
use App\Models\Allowance as ModelsAllowance;
use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Allowance extends Component
{
    public ModelsAllowance $allowance;
    
    public function __construct($allowance = '')
    {
        $this->allowance = $allowance;
    }

    public function kindTransaction(): string
    {
        if($this->allowance->kindTransaction == TransactionEnum::REVENUE->name){
            return TransactionEnum::REVENUE->value;
        }
        return TransactionEnum::EXPENSE->value;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.helper.text.allowance');
    }
}
