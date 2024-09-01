<?php

namespace App\View\Components\Modal;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Modal extends Component
{
    public string $id;
    public string $title;
    public string $body;
    public string $buttons;

    public function __construct($id = '', $title = '', $body = '', $buttons = '')
    {
        $this->id = $id;
        $this->title = $title;
        $this->body = $body;
        $this->buttons = $buttons;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.modal.modal');
    }
}
