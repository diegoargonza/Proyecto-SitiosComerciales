
        <div class="row">
            <h1>Ventas</h1>
            <hr>

            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 mb-3">
                    <label for="sale_id" class="form-label">Id</label>
                    <input type="text" class="form-control" id="sale_id" name="sale_id" disabled value="{{$sale->id}}">
                </div>

                <div class="col-lg-8 col-md-6 col-12 mb-3">
                    <label for="name" class="form-label">Nombre del producto</label>
                    <input type="text" class="form-control" placeholder="Nombre del producto " id="name" name="name" value="{{old('name', $sale->name) }}">
                </div>
            </div>
            
            <div class="row">
                <div class="col-lg-4 col-12 mb-3">
                    <label for="" class="form-label">Categoria</label>
                    <select id="category_id" aria-label="selecciona una categoria" class="form-select" name="category_id">
                        <option value=""  disabled>Selecciona una opción</option>
                        @foreach ($categories as $category)    
                            <option value="{{ $category->id }}" @if (old('category_id', $sale->category_id) == $category->id) 'selected' @endif > {{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-lg-4 col-12 mb-3">
                    <label for="fecha" class="form-label">Fecha</label>
                    <input type="date" class="form-control" id="fecha" name="fecha" value="{{old('fecha',$sale->fecha)}}">
                </div>

                <div class="col-lg-4 col-12 mb-3">
                    <label for="" class="form-label">Status</label>
                    <select id="is_status" aria-label="selecciona un estatus" class="form-select" name="is_status">
                        <option value="" disabled>Selecciona una opción</option>
                        <option value="1" @if (old('is_status', $sale->is_status) == "1") selected @endif >Activo</option>
                        <option value="0" @if (old('is_status', $sale->is_status) == "0") selected @endif>Inactivo</option>
                    </select>
                </div>

                <saletax-component/>
            
                <div class="mb-3">
                    <label for="name" class="form-label">Observaciones</label>
                    <textarea type="text" class="form-control" rows="3" placeholder="Nombre del producto " id="name" name="observaciones">{{$sale->observaciones}}</textarea>
                </div>


            <div class="row">
                <div class="col">
                    <input type="submit" class="btn btn-primary" value="guardar">
                </div>
                <div class="col">
                    <a href="{{route('sale.index')}}" class="btn btn-danger">Cancelar</a>
                </div>
            </div>
        </div>   

