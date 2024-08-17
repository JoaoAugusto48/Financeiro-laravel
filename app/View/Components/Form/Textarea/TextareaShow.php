<?php

namespace App\View\Components\Form\Textarea;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class TextareaShow extends Component
{
    public string $label;
    public string $value;
    public int $rows;
    /**
     * Create a new component instance.
     */
    public function __construct($label = '', $value = '', $rows = 3, $placeholder = '')
    {
        $this->label = $label;
        $this->value = $value;
        $this->rows = $rows;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.form.textarea.textarea-show');
    }
}
