<?php

namespace App\View\Components\Form\Radio;

use App\Enums\TransactionEnum as EnumTransaction;
use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;

class TransactionEnum extends Radio
{
    /**
     * @var TransactionEnum[]
     */
    public array $transactionEnum;

    public function __construct($name, $label = '', $checked = '', $required = false)
    {
        parent::__construct($name,$label,$checked,$required);
        $this->transactionEnum = EnumTransaction::cases();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.radio.transaction-enum');
    }
}
