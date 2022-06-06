<?php

namespace App\Http\Livewire\Components;

use App\Trait\showModal;
use Livewire\Component;

class Button extends Component
{
    use showModal;

    protected $listeners = ['actionModal'];

    public function actionModal()
    {
        // dd('asd');
        $this->openModal();
    }

    public function render()
    {
        return view('livewire.components.button');
    }
}
