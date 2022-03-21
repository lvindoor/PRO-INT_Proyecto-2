<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Pedidos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-dark overflow-hidden shadow-xl sm:rounded-lg">
                <table class="table table-hover table-dark">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Ubicacion</th>
                        <th scope="col">Paquete</th>
                        <th scope="col">Entregado</th>
                        <th scope="col">Calificacion</th>
                        <th scope="col">Detalles</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Borrar</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($orders as $order)
                        <tr>
                            <td>{{ $order->id }}</td>
                            <td>{{ $deliveryPoints->where('id', $order->machine_id)->first()->location }}</td>
                            <td>{{ $packages->where('id', $order->package_id)->first()->name }}</td>
                            <td>{{ $order->delivered ? "Si" : "No" }}</td>
                            <td>{{ $order->rating }}</td>
                            <td>
                                <button type="button" class="btn btn-outline-primary btn-sm">
                                    <a href="orders/{{$order->id}}"><i class="bi bi-eye"></i></a>
                                </button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-outline-primary btn-sm">
                                    <a href="orders/{{$order->id}}/edit"><i class="bi bi-pencil-square"></i></a>
                                </button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-outline-primary btn-sm">
                                    <form action="orders/{{$order->id}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" value="Borrar"><i class="bi bi-trash"></i>
                                    </form>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</x-app-layout>
