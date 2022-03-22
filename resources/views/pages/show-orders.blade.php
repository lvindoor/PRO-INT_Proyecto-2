<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detalles') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div class="card">
                    <div class="card-header">
                      Acerca de mi Pedido
                    </div>
                    <div class="card-body">
                      <blockquote class="blockquote mb-0">
                        <h2> {{ $order->package->name }} </h2>
                        <h3> No Pedido {{ $order->id }} </h3> <br>

                        <p> <b>Descripción:</b> {{ $order->package->description }} </p>
                        <p> <b>Cantidad:</b> {{ $order->package->quantity }} </p>
                        <p> <b>Total:</b> {{ $order->package->price }} </p>
                        <p> <b>Recogelo en:</b> {{ $order->machine->deliveryPoint->location }} </p>
                        <p> <b>Maquina:</b> {{ $order->machine->model }} </p>
                        <p> <b>Entregado:</b> {{ $order->delivered ? "Si" : "No" }} </p>
                        <p> <b>Calificacion (☆) :</b> {{ $order->rating }} </p> <br>

                        <footer class="blockquote-footer"><cite title="Source Title">Vivimos para servirles</cite></footer>
                      </blockquote>
                    </div>
                  </div>


            </div>
        </div>
    </div>

</x-app-layout>
