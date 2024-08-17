<?php

namespace App\View\Components\Form\Input;

use Carbon\Carbon;
use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Timestamps extends Component
{
    public string $createdAt;
    public string $updatedAt;
    public string $format;
    public string $class;

    public function __construct($createdAt = '', $updatedAt = '', $format = 'Y-m-d H:i:s', $class = 'col-3')
    {
        $this->createdAt = $createdAt;
        $this->updatedAt = $updatedAt;
        $this->format = $format;
        $this->class = $class;
    }

    public function formattedCreatedAt(): string
    {
        return Carbon::parse($this->createdAt)->format($this->format);
    }

    public function formattedUpdatedAt(): string
    {
        return Carbon::parse($this->updatedAt)->format($this->format);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.input.timestamps');
    }
}
