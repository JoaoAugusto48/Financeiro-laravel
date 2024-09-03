<?php

namespace App\View\Components\Modal\Delete;

use App\Models\Allowance;
use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class AllowanceModal extends Component
{
    public string $id;
    public Allowance $allowance;

    public function __construct($id = '', $object = '')
    {
        $this->id = $id;
        $this->allowance = $object;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.modal.delete.allowance-modal');
    }
}
