<?php

namespace App\Http\Livewire\Pedidos;

use Livewire\Component;

class Declaracao extends Component
{
    public $pedido;

    public function mount($pedido){
        $this->pedido = $pedido;
    }

    public function render()
    {
        return view('livewire.pedidos.declaracao');
    }
}
