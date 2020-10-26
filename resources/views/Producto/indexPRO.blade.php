@extends('layouts.app')

@section('content')

<div class="container">

@if(Session::has('Mensaje'))
<div class="alert alert-success" role="alert">
{{Session::get('Mensaje')}}
</div>
@endif

<a href="{{url('producto/create')}}" class="btn btn-success">Agregar Producto</a>
<br><bR>
<style>
  .estado1 {background-color : ##5cb85c !important; }
  .estado2 {background-color : ##d9534f !important; }
</style>
<table class="table table-light table-bordered table-hover">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Referencia</th>
            <th>Descripcion Corta</th>
            <th>Valor</th>
            <th>Categoria</th>
            <th>Marca</th>
            <th>Estado</th>
            <th>Acciones</th>
            

        </tr>
    </thead>
    <tbody>
    @foreach($datos as $producto)
        <tr>
            <td>{{$loop->iteration}}</td>

            <td>
            <img src="{{asset('storage').'/'.$producto->foto}}" class="img-thumbnail img-fluid " alt="" width="160">
            </td>
            <td>{{$producto->nombre}}</td>
            <td>{{$producto->referencia}}</td>
            <td>{{$producto->descripcioncorta}}</td>
            <td>{{$producto->valor}}</td>
            <td>{{$producto->nombre_categoria}}</td>
            <td>{{$producto->nombre_marca}}</td>
            @if($producto->estado == 'Disponible')
            <td class="table-success">{{ $producto->estado}}</td>
            @elseif($producto->estado == 'Agotado')
            <td class="table-danger">{{ $producto->estado}}</td>
            @endif
            <td>
            <a class="btn btn-warning" href="{{url('/producto/'.$producto->id.'/edit')}}">
            Editar
            </a> <br>
            <form method="post" action="{{url('/producto/'.$producto->id)}}" style="display:inline">
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <button class="btn btn-danger" type="submit" onClick="return confirm('¿Borrar?');">Borrar</button> 
            </form>
            
            </td>
            

        </tr>
        @endforeach
    </tbody>

</table>
{{ $datos->links('pagination::bootstrap-4') }}
</div>
@endsection