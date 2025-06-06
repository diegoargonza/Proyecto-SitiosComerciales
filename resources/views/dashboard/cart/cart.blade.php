@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Carrito de Compras</h1>
    
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if(count((array) session('cart')))
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Cantidad</th>  
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                @php $total = 0 @endphp
                @foreach(session('cart') as $id => $details)
                    @php $total += $details['price'] * $details['quantity'] @endphp
                    <tr>
                        <td>{{ $details['name'] }}</td>
                        <td>${{ number_format($details['price'], 2) }}</td>
                        <td>
                             <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity update-cart" data-id="{{ $id }}" />
                        </td>
                       
                        <td>
                            <button class="btn btn-danger btn-sm remove-from-cart" data-id="{{ $id }}">
                                Eliminar
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div class="alert alert-warning">
            Tu carrito está vacío
        </div>
    @endif
</div>
@endsection