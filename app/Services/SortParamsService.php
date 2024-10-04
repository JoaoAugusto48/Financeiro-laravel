<?php 

namespace App\Services;

class SortParamsService
{
    public ?string $label;
    public string $sort;
    public string $type;

    public function __construct(string $sort = 'name', string $type = 'asc', string $label = null)
    {
        $this->label = $label;
        $this->sort = $sort;
        $this->type = $type;
    }
}