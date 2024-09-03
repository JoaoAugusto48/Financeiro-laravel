<?php

namespace App\View\Components\Modal\Delete;

use App\Models\AccountHolder;
use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class AccountHolderModal extends Component
{
    public string $id;
    public AccountHolder $accountHolder;

    public function __construct($id = '', $object = '')
    {
        $this->id = $id;
        $this->accountHolder = $object;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.modal.delete.account-holder-modal');
    }
}
