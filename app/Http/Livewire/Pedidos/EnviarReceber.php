<?php

namespace App\Http\Livewire\Pedidos;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Pedido;
use App\Models\Import as PedidoImport;
use App\Models\Produto;

class Enviarreceber extends Component
{
    public function render()
    {
        return view('livewire.pedidos.enviar-receber');
    }

    public function import(Request $request){
        $this->request = $request;
        $response = Http::get('http://foliaproducoes.com.br/wp-json/foliabahia2020/v1/pedidos_entrega');
        $pedidos = $response->json();
        foreach ($pedidos as $p){
            $antigos = Pedido::find($p["order_id"]);
            $aguardando = PedidoImport::find($p["order_id"]);
            if (!isset($antigos)&&!isset($aguardando)){
                $novo = new PedidoImport();
                $novo->id = $p["order_id"];
                $novo->order_date = $p["order_date"];
                $novo->customer_id = $p["customer"]["customer_id"];
                $novo->customer_document = preg_replace('/[^0-9]/', '', $p["customer"]["document"]);
                $novo->customer_billing_full_name = $p["customer"]["billing_full_name"];
                $novo->customer_email = $p["customer"]["email"];
                $novo->customer_phone = $p["customer"]["phone"];
                $novo->customer_city = $p["customer"]["city"];
                $novo->customer_state = $p["customer"]["state"];
                $novo->customer_zipcode = preg_replace('/[^0-9]/', '', $p["customer"]["zipcode"]);
                $novo->payment_method = $p["payment_method"];
                $novo->payment_method_title = $p["payment_method_title"];
                $novo->payment_transaction_id = $p["payment_transaction_id"];
                $novo->local_retirada = $p["local_retirada"];
                $novo->local_retirada_title = $p["local_retirada_title"];
                $novo->valor = $p["order_total"];
                $novo->products = json_encode($p["products"]);
                $novo->save();
            }


            // cria ou atualiza os todos os produtos que estão presentes nos pedidos
            $produtosJson = json_decode(json_encode($p["products"]));
            foreach ($produtosJson as $prod){
                $produto = Produto::find($prod->product_id);
                if (!$produto){
                    $produto = new Produto();
                    $produto->id = $prod->product_id;
                    $produto->name = $prod->name;
                    $produto->dias = $prod->dia!=='' ? $prod->dia : 'Quinta-feira, Sexta-feira, Sábado, Domingo, Segunda-feira, Terça-feira';
                }
                $produto->comprado = $prod->comprado;
                $produto->recebido = $prod->recebido;
                $produto->save();
            }
        }//end foreach



        $pedidos = PedidoImport::where('id', 'like', '%'.$request->input('id').'%')
                            ->where('customer_billing_full_name', 'like', '%'.$request->input('name').'%')
                            ->where('customer_document', 'like', '%'.$request->input('document').'%');

        if ($request->input('payment_method_pagseguro_boleto') && $request->input('payment_method_pagseguro_boleto')==='false'){
            $pedidos = $pedidos->where('payment_method', '!=', "pagseguro-boleto");
        }
        if ($request->input('payment_method_pagseguro') && $request->input('payment_method_pagseguro')==='false'){
            $pedidos = $pedidos->where('payment_method', '!=', "pagseguro");
        }
        if ($request->input('payment_method_foliabahia_gbwc') && $request->input('payment_method_foliabahia_gbwc')==='false'){
            $pedidos = $pedidos->where('payment_method', '!=', "foliabahia-gbwc");
        }
        if ($request->input('payment_method_getnet') && $request->input('payment_method_getnet')==='false'){
            $pedidos = $pedidos->where('payment_method', '!=', "getnet");
        }

        $order_date_min = $request->input('order_date_min') ? $request->input('order_date_min') : date('d-m-Y H:i:s', 0);
        $order_date_max =  $request->input('order_date_max') ? $request->input('order_date_max') : date("Y-m-d H:i:s");
        $pedidos = $pedidos->whereBetween('order_date', [$order_date_min, $order_date_max]);

        $min_value = $request->input('valor_min') ? $request->input('valor_min') : 0;
        $max_value =  $request->input('valor_max') ? $request->input('valor_max') : 999999999999;
        $pedidos = $pedidos->whereBetween('valor', [$min_value, $max_value]);

        $orderby = $request->input('orderby') ? $request->input('orderby') : "id";
        $sort = $request->input('sort') ? $request->input('sort') : "asc";
        $pedidos = $pedidos->orderBy($orderby, $sort)
                            ->get();
        $this->pedidos = $pedidos;
    }
}
