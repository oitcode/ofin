<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CreateComponent extends Component
{
    public $componentId;

    public $bar;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($componentId)
    {
        $this->componentId = $componentId;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.create-component');
    }
}
