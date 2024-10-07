<?php

namespace App\View\Components\Action;

use App\Services\SortParamsService;
use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class DropdownFilter extends Component
{
    /**
     * Summary of options
     * @var SortParamsService[]
     */
    public array $options;
    public SortParamsService $currentSort;

    public function __construct(array $options, SortParamsService $currentSort)
    {
        $this->options = $options;
        $this->currentSort = $currentSort;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.action.dropdown-filter');
    }
}
