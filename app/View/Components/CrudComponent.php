<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CrudComponent extends Component
{
    public $bizbar;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $bizbar)
    {
        $this->bizbar = $bizbar;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.crud-component');
    }
}
