<?php

namespace App\View\Components\Modal\Delete;

use App\Models\Account;
use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class AccountModal extends Component
{
    public string $id;
    public Account $account;

    public function __construct($id = '', $object = '')
    {
        $this->id = $id;
        $this->account = $object;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.modal.delete.account-modal');
    }
}
