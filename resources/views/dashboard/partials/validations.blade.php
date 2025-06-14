@if ($errors->any()) 
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>  
@endif

@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }} 
    </div>  
@endif