<?php

namespace App\View\Components\Form\Textarea;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Textarea extends Component
{
    public string $name;
    public string $label;
    public string $value;
    public int $rows;
    public string $placeholder;

    public function __construct($name, $label = '', $value = '', $placeholder = '', $rows = 3)
    {
        $this->name = $name;
        $this->label = $label;
        $this->value = $value;
        $this->rows = $rows;
        $this->placeholder = $placeholder;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.textarea');
    }
}
