<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Dashboard extends Component
{
    public function mount()
    {
        return redirect()->route('atendimento.index');
    }
}
