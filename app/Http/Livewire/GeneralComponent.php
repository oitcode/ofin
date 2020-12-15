<?php

namespace App\Http\Livewire;

use Livewire\Component;

class GeneralComponent extends Component
{

    public $createMode = false;
    public $listMode = false;
    public $displayMode = false;
    public $updateMode = false;

    public function enterCreateMode()
    {
        $this->createMode = true;
    }

    public function exitCreateMode()
    {
        $this->createMode = false;
    }

    public function create()
    {
        $this->createMode = true;
    }

    public function enterListMode()
    {
        $this->listMode = true;
    }

    public function exitListMode()
    {
        $this->listMode = false;
    }
}
