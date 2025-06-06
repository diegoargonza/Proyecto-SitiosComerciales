@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Productos</h1>
    
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-striped table-striped">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio </th>
                <th>Cantidad</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody class="">
            @forelse($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>${{ number_format($product->total, 2) }}</td>
                <td>{{ $product->cantidad }}</td>
                <td>
                    @if($product->cantidad > 0)
                        <a href="{{ route('cart.add', $product->id) }}" class="btn btn-primary">
                            Agregar al carrito
                        </a>
                    @else
                        <button class="btn btn-secondary" disabled>Agotado</button>
                    @endif
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="text-center">No hay productos disponibles</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection