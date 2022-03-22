<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear Pedido') }}
        </h2>
    </x-slot>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="list-group">
                @foreach ($errors->all() as $error)
                    <li class="list-group-item list-group-item-danger">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <section class="vh-50 gradient-custom">
        <div class="container py-5 h-50">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">

                            <div class="mb-md-5 mt-md-4 pb-5">

                                <h2 class="fw-bold mb-2 text-uppercase">Formulario</h2>
                                <p class="text-white-50 mb-5">Realiza tu pedido</p>

                                @isset($order)
                                    <form action="/orders/{{ $order->id }}" method="POST"> {{-- Editar --}}
                                        @method('PATCH')
                                    @else
                                        <form action="/orders" method="POST"> {{-- Crear --}}
                                        @endisset

                                        @csrf

                                        <form>
                                            <div class="form-row">
                                                <div class="col">
                                                    <select name="machine_id" class="custom-select my-1 mr-sm-2"
                                                        id="inlineFormCustomSelectPref">
                                                        <option value="0" @if(isset($order)) selected @endif>Ubicacion</option>
                                                        @foreach ($deliveryPoints as $deliveryPoint)
                                                            <option value=" {{ $deliveryPoint->id }} " {{ isset($order) && $order->machine->deliveryPoint->id == $deliveryPoint->id ? 'selected' : '' }} >
                                                                {{ $deliveryPoint->location }}
                                                            </option>
                                                        @endforeach
                                                    </select><br>
                                                    <div class="valid-feedback">Example invalid custom select feedback
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col">
                                                    <select name="package_id" class="custom-select my-1 mr-sm-2"
                                                        id="inlineFormCustomSelectPref">
                                                        <option value="0" selected>Paquete</option>
                                                        @foreach ($packages as $package)
                                                            <option value=" {{ $package->id }} " {{ isset($order) && $order->package->id == $package->id ? 'selected' : '' }}> {{ $package->name }} </option>
                                                        @endforeach
                                                    </select><br>
                                                    <div class="valid-feedback">Example invalid custom select feedback
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-row">
                                                <div class="col">
                                                    <select name="rating" class="custom-select my-1 mr-sm-2"
                                                        id="inlineFormCustomSelectPref">
                                                        <option value="0" @if(isset($order)) selected @endif>Calificacion...</option>
                                                        <option value="1" {{ isset($order) && $order->rating == '1' ? 'selected' : '' }}>1</option>
                                                        <option value="2" {{ isset($order) && $order->rating == '2' ? 'selected' : '' }}>2</option>
                                                        <option value="3" {{ isset($order) && $order->rating == '3' ? 'selected' : '' }}>3</option>
                                                        <option value="4" {{ isset($order) && $order->rating == '4' ? 'selected' : '' }}>4</option>
                                                        <option value="5" {{ isset($order) && $order->rating == '5' ? 'selected' : '' }}>5</option>
                                                    </select><br>
                                                    <div class="valid-feedback">Example invalid custom select feedback
                                                    </div>
                                                </div>
                                            </div>
                                            <br><button type="submit" class="btn btn-outline-warning">Aceptar</button>
                                        </form>

                                        <div class="d-flex justify-content-center text-center mt-4 pt-1">
                                            <a href="#!" class="text-white"><i
                                                    class="fab fa-facebook-f fa-lg"></i></a>
                                            <a href="#!" class="text-white"><i
                                                    class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                                            <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                                        </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-app-layout>
