<?php

namespace App\View\Components\Modal\Delete;

use App\Models\Transaction;
use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class TransactionModal extends Component
{
    public string $id;
    public Transaction $transaction;

    public function __construct($id = '', $object = '')
    {
        $this->id = $id;
        $this->transaction = $object;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.modal.delete.transaction-modal');
    }
}
