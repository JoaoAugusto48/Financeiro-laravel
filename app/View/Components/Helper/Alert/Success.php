<?php

namespace App\View\Components\Helper\Alert;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Success extends Component
{
    public string|null $success;

    public function __construct($success = null)
    {
        $this->success = $success;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.helper.alert.success');
    }
}
