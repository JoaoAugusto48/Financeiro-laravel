<?php

namespace App\View\Components\Form\Select;

use App\Models\Allowance;
use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;

class AllowanceSelect extends Select
{
    /**
     * Summary of accounts
     * @var Allowance[]
     */
    public Collection $allowancens;

    public function __construct($name = '', $label = '', $selected = '', $options = [], $required = false)
    {
        parent::__construct($name,$label,$selected,$required);
        $this->allowancens = $options;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.select.allowance-select');
    }
}
