<?php

namespace App\View\Components\Helper\Alert;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Warning extends Component
{
    public string|null $warning;

    public function __construct($warning = null)
    {
        $this->warning = $warning;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.helper.alert.warning');
    }
}
