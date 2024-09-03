<?php

namespace App\View\Components\Action\Button\Group;

use App\Models\Account;
use App\Models\AccountHolder;
use App\Models\Allowance;
use App\Models\Bank;
use App\Models\Transaction;
use App\View\Components\Action\Button\Button;
use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class ButtonDelete extends Button
{
    public object $object;
    public string|bool $typeObject;

    public array $modalComponents = [
        'account' => 'modal.delete.account-modal ',
        'accountHolder' => 'modal.delete.account-holder-modal ',
        'allowance' => 'modal.delete.allowance-modal ',
        'bank' => 'modal.delete.bank-modal ',
        'transaction' => 'modal.delete.transaction-modal ',
    ];
    public string $modalComponent;
    
    public function __construct($label = '', $url = '#', $class = 'danger btn-sm', $object = '')
    {
        parent::__construct($label,$url,$class,type: 'submit');
        $this->object = $object;

        $this->typeObject = $this->findObject();
        $this->modalComponent = $this->modalComponents[$this->typeObject] ?? null;
    }

    public function findObject(): string|bool
    {
        if($this->object instanceof Allowance) {
            return 'allowance';
        }

        if($this->object instanceof Account) {
            return 'account';
        }

        if($this->object instanceof AccountHolder) {
            return 'accountHolder';
        }

        if($this->object instanceof Bank) {
            return 'bank';
        }

        if($this->object instanceof Transaction) {
            return 'transaction';
        }

        return false;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.action.button.group.button-delete');
    }
}
