<?php

namespace App\View\Components\Tables;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class DataTable extends Component
{
    public string $id;
    public ?string $class;
    public ?string $thead;
    public ?string $tbody;
    public ?string $paging;
    public ?string $searching;
    public ?string $info;
    public ?string $ordering;
    public ?string $lengthChange;
    public ?string $autoWidth;
    public ?string $scrollX;

    public function __construct(
        string $id = '', 
        ?string $thead = '', 
        ?string $tbody = '', 
        ?string $ordering = 'true',
        ?string $paging = 'false',
        ?string $searching = 'false',
        ?string $info = 'false',
        ?string $lengthChange = 'false',
        ?string $autoWidth = 'false',
        ?string $scrollX = 'false',
        ?string $class = '',
    ) {
        $this->id = $id;
        $this->thead = $thead;
        $this->tbody = $tbody;
        $this->class = $class;
        $this->ordering = $ordering;
        $this->paging = $paging;
        $this->searching = $searching;
        $this->info = $info;
        $this->autoWidth = $autoWidth;
        $this->lengthChange = $lengthChange;
        $this->scrollX = $scrollX;
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.tables.data-table');
    }
}
