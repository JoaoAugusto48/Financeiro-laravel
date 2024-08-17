<?php

namespace App\View\Components\Form\Radio;

use App\Enums\TransactionEnum;
use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;

class RadioTransactionEnum extends Radio
{
    /**
     * @var TransactionEnum[]
     */
    public array $transactionEnum;

    public function __construct($name, $label = '', $checked = '', $options = [], $required = false)
    {
        parent::__construct($name,$label,$checked,$required);
        $this->transactionEnum = $options;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.radio.radio-transaction-enum');
    }
}
