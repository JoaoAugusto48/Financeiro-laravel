<?php

namespace App\View\Components\Helper\Alert;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Danger extends Component
{
    public string|null $error;

    public function __construct($error = null)
    {
        $this->error = $error;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.helper.alert.danger');
    }
}
