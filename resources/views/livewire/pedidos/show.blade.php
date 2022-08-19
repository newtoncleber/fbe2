<div>
    <x-slot name="header">
        {{ __('Pedido') }}

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Pedido {{$pedido}}
                    <x-nav-link :href="route('pedidos.voucher', $pedido)"
                        :active="request()->routeIs('pedidos.voucher')">
                        pedidos.voucher
                    </x-nav-link>
                    <x-nav-link :href="route('pedidos.declaracao', $pedido)"
                        :active="request()->routeIs('pedidos.declaracao')">
                        pedidos.declaracao
                    </x-nav-link>
                </div>
            </div>
        </div>
    </div>
</div>
