<div>
    <x-slot name="header">
        {{ __('Declaração de compra') }}

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Declaração de compra {{$pedido}}
                </div>
            </div>
        </div>
    </div>
</div>
