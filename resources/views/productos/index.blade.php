@extends('layouts.app')

@section('content')
<div class="container">


@if(Session::has('Mensaje'))

<div class="alert alert-success" role="alert">
{{
    Session::get('Mensaje')
    
}}
</div>
@endif
<a href="{{url('productos/create')}}" class="btn btn-success">Registrar Producto</a>
<br/>
<br/>

<table class="table table-light table-hover">

    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Categoria</th>
            <th>Cantidad</th>
            <th>Precio</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
    @foreach($productos as $producto)
        <tr>
            <td>{{$loop->iteration}}</td>

            <td>

            <img src="{{$producto->Foto}}" class="img-thumbnail img-fluid" alt="" width="100">
        
            
            </td>
            <td>{{$producto->Nombre}}</td>
            <td>{{$producto->Categoria}}</td>
            <td>{{$producto->Cantidad}}</td>
            <td>{{$producto->Precio}}</td>
            <td>
            
            <a class="btn btn-warning" href="{{ url('/productos/'.$producto->id.'/edit')}}">
            Editar
            </a>            
            <form method="post" action="{{ url('/productos/'.$producto->id)}}" style="display:inline">
            {{csrf_field()}}
            {{ method_field('DELETE')}}
            <button class="btn btn-danger" type="submit" onclick="return confirm('¿Borrar?');">Borrar</button>

            </form>
            
            </td>
        </tr>
    @endforeach
    </tbody>

</table>

{{ $productos->links() }}
</div>
@endsection