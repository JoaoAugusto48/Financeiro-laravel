<?php

namespace App\View\Components\Action\Button\Group;

use App\Models\Allowance;
use App\View\Components\Action\Button\Button;
use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use User;

class ButtonDelete extends Button
{
    public object $object;
    public string|bool $typeObject;
    
    public function __construct($label = '', $url = '#', $class = 'danger btn-sm', $object = '')
    {
        parent::__construct($label,$url,$class,type: 'submit');
        $this->object = $object;

        $this->typeObject = $this->findObject();
    }

    public function findObject(): string|bool
    {
        if($this->object instanceof Allowance) {
            return 'allowance';
        }

        return false;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.action.button.group.button-delete');
    }
}
