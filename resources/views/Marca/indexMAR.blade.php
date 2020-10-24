
@extends('layouts.app')

@section('content')

<div class="container">

@if(Session::has('Mensaje'))
<div class="alert alert-success" role="alert">
{{Session::get('Mensaje')}}
</div>
@endif

<a href="{{url('marca/create')}}" class="btn btn-success">Agregar Marca</a>
<br><br>
<table class="table table-light table-bordered table-hover">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Acciones</th>
            

        </tr>
    </thead>
    <tbody>
    @foreach($marcas as $marca)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$marca->nombre}}</td>
            <td>{{$marca->descripcion}}</td>
            <td>
            <a class="btn btn-warning" href="{{url('/marca/'.$marca->id.'/edit')}}">
            Editar
            </a> 
            <form method="post" action="{{url('/marca/'.$marca->id)}}" style="display:inline">
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <button class="btn btn-danger" type="submit" onClick="return confirm('¿Borrar?');">Borrar</button> 
            </form>
            
            </td>
            

        </tr>
        @endforeach
    </tbody>

</table>
{{ $marcas->links() }}
</div>
@endsection