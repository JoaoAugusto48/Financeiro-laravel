<?php

namespace App\View\Components\Helper\Text;

use App\Models\Bank as ModelsBank;
use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Bank extends Component
{
    public ModelsBank $bank;
    
    public function __construct($bank = '')
    {
        $this->bank = $bank;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.helper.text.bank');
    }
}
