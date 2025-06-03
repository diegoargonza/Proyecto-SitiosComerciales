@extends('layouts.app')

@section('content')

    <div class="row mt-4">
        <div class="row">
            <h1>Ventas</h1> 
            <div class="col-12 mt-2">
                <a href="{{ route('sale.create') }}" class="btn btn-success">Crear</a>
            </div>
        </div>
    </div>   

    <div class="row mt-4">
        <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Producto</th>
                <th scope="col">Categoría</th>
                <th scope="col">Fecha</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Total</th>
                <th scope="col">Estatus</th>
                <th scope="col">Opciones</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($sales as $sale)                    
                <tr>
                  <th scope="row">{{$sale->id}}</th>
                  <td>{{$sale->name}}</td>
                  <td>{{$sale->category_name}}</td>
                  <td>{{$sale->fecha}}</td>
                  <td>{{$sale->cantidad}}</td>
                  <td>{{$sale->total}}</td>
                  <td>{{$sale->is_status}}</td>
                  <td> 
                    <a href="{{ route('sale.edit', $sale->id) }}" class="btn btn-secondary">Editar</a>
                  </td>
                  <td> 

                  <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $sale->id }}">Eliminar</button>
                    <div class="modal fade" id="deleteModal{{ $sale->id }}" tabindex="-1" aria-labelledby="modalLabel{{ $sale->id }}" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h1 class="modal-title fs-5" id="modalLabel{{ $sale->id }}">Confirmar Eliminación</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                          </div>
                        <div class="modal-body">
                          ¿Estás seguro de que deseas eliminar el producto <strong>{{ $sale->name }}</strong>?
                        </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>


                    <form action="{{ route('sale.destroy', $sale->id) }}"  method="POST">
                      @csrf
                      @method('DELETE') 
                      <button type="submit" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#Modal">Eliminar</button>
                    </form>
                  </td>
                </tr>
                @endforeach
            </tbody>
          </table>
    </div>

    
  

    <div class="row mt-4">
      {{ $sales->links() }}
    </div>
@endsection