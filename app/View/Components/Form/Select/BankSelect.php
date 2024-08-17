<?php

namespace App\View\Components\Form\Select;

use App\Models\Bank;
use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;

class BankSelect extends Select
{
    /**
     * @var Bank[]
     */
    public Collection $banks;

    public function __construct($name = '', $label = '', $selected = '', $options = [], $required = false)
    {
        parent::__construct($name,$label,$selected,$required);
        $this->banks = $options;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.select.bank-select');
    }
}
