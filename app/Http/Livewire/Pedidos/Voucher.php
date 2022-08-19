<?php

namespace App\Http\Livewire\Pedidos;

use Livewire\Component;

class Voucher extends Component
{
    public $pedido;

    public function mount($pedido){
        $this->pedido = $pedido;
    }

    public function render()
    {
        return view('livewire.pedidos.voucher');
    }
}
