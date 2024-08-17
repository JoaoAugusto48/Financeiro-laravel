<?php

namespace App\View\Components\Form\Select;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Collection;

class Select extends Component
{
    public string $name;
    public string $label;
    public string $selected;
    public bool $required;

    public function __construct($name, $label = '', $selected = '', $required = false)
    {
        $this->name = $name;
        $this->label = $label;
        $this->selected = $selected;
        $this->required = $required;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.select');
    }
}
