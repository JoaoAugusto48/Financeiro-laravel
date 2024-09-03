<?php

namespace App\View\Components\Modal\Delete;

use App\Models\Bank;
use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class BankModal extends Component
{
    public string $id;
    public Bank $bank;

    public function __construct($id = '', $object = '')
    {
        $this->id = $id;
        $this->bank = $object;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.modal.delete.bank-modal');
    }
}
