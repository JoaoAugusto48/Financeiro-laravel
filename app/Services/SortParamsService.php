<?php 

namespace App\Services;

class SortParamsService
{
    public string $sort;
    public string $type;

    public function __construct(string $sort = 'name', string $type = 'asc', array $allowedSorts)
    {
        $this->sort = in_array($sort, $allowedSorts) ? $sort : $allowedSorts[0];
        $this->type = in_array($type, ['asc', 'desc']) ? $type : 'asc';
    }
}