@extends('layouts.app')

@section('content')

<div class="container">

@if(Session::has('Mensaje'))
<div class="alert alert-success" role="alert">
{{Session::get('Mensaje')}}
</div>

@endif

    
<a href="{{url('categoria/create')}}" class="btn btn-success">Agregar Categoria</a>
<br><br>
<style>
  .estado1 {background-color : ##5cb85c !important; }
  .estado2 {background-color : ##d9534f !important; }
</style>
<table class="table table-light table-bordered table-hover">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Estado</th>
            <th>Acciones</th>
            

        </tr>
    </thead>
    <tbody>
    @foreach($categorias as $categoria)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$categoria->nombre}}</td>
            <td>{{$categoria->descripcion}}</td>
            @if($categoria->estado == 'Activada')
            <td class="table-success">{{ $categoria->estado}}</td>
            @elseif($categoria->estado == 'Desactivada')
            <td class="table-danger">{{ $categoria->estado}}</td>
            @endif
            <td>
            <a class="btn btn-warning" href="{{url('/categoria/'.$categoria->id.'/edit')}}">
            Editar
            </a>
            <form method="post" action="{{url('/categoria/'.$categoria->id)}}" style="display:inline">
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <button class="btn btn-danger" type="submit" onClick="return confirm('¿Borrar?');">Borrar</button> 
            </form>
            
            </td>
            

        </tr>
        @endforeach
    </tbody>

</table>

{{ $categorias->links('pagination::bootstrap-4') }}
</div>
</div>
</div>
@endsection