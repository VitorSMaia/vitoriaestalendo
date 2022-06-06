<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class Modal extends Component
{
    public $showModal;

    public function open()
    {
        $this->showModal = true;

    }

    public function close()
    {
        $this->showModal = false;
    }

    public function render()
    {
        return view('livewire.components.modal');
    }
}
