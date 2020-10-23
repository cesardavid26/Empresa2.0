@extends('layouts.app')

@section('content')

<div class="container">

@if(Session::has('Mensaje')){{
Session::get('Mensaje')
}}
@endif

<a href="{{url('categoria/create')}}" class="btn btn-success">Agregar Categoria</a>
<br><br>
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
            <td>{{$categoria->estado}}</td>
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
</div>
@endsection