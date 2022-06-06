<?php

namespace App\Trait;

use App\Http\Livewire\Components\Modal;

trait showModal
{
    public function openModal()
    {
        // dd('asd');
        $teste = new Modal;
        $teste->open();
    }

    public function closeModal()
    {
        // dd('JOao 111');
        $teste = new Modal;
        $teste->close();
    }
}
