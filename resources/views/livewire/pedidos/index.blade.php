<div>
    <x-slot name="header">
        {{ __('Identificação do pedido') }}

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Identificação do pedido
                    <x-nav-link :href="route('pedidos.show', 222)" :active="request()->routeIs('pedidos.show')">
                        pedidos.show
                    </x-nav-link>
                </div>
            </div>
        </div>
    </div>
</div>
