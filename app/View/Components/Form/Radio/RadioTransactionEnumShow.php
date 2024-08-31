<?php

namespace App\View\Components\Form\Radio;

use App\Enums\TransactionEnum;
use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class RadioTransactionEnumShow extends RadioShow
{
    /**
     * @var TransactionEnum[]
     */
    public array $transactionEnum;

    public function __construct($label = '', $checked = '')
    {
        parent::__construct($label,$checked);
        $this->transactionEnum = TransactionEnum::cases();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.radio.radio-transaction-enum-show');
    }
}
