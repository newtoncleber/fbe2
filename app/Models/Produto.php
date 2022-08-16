<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;


        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'name', 'qtd_comprada', 'qtd_recebida', 'qtd_quitada', 'qtd_liberada', 'qtd_retirada', 'qtd_entregue', 'retirada_salvador', 'retirada_porto', 'retirada_aeroporto'
    ];

    public function pedidos()
    {
        return $this->belongsToMany(Pedido::class)->withPivot('quantity');
    }

}
