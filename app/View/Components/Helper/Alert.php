<?php

namespace App\View\Components\Helper;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Alert extends Component
{
    public ?string $success;
    public ?string $error;
    public ?string $warning;

    public function __construct($messages = [])
    {
        $this->success = $messages['success'] ?? null;
        $this->error = $messages['error'] ?? null;
        $this->warning = $messages['warning'] ?? null;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.helper.alert');
    }
}
