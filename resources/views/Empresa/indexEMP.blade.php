@extends('layouts.app')

@section('content')

<div class="container">

@if(Session::has('Mensaje'))
<div class="alert alert-success" role="alert">
{{Session::get('Mensaje')}}
</div>
@endif


<table class="table table-light table-bordered table-hover">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Quienes somos</th>
            <th>Email Contacto</th>
            <th>Direccion</th>
            <th>Telefono Contacto</th>
            <th>Acciones</th>

        </tr>
    </thead>
    <tbody>
    @foreach($empresas as $empresa)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$empresa->nombre}}</td>
            <td>{{$empresa->quienessomos}}</td>
            <td>{{$empresa->emailcontacto}}</td>
            <td>{{$empresa->direccion}}</td>
            <td>{{$empresa->telefonocontacto}}</td>
            <td>
            <a class="btn btn-warning" href="{{url('/empresa/'.$empresa->id.'/edit')}}">
            Editar
            </a> 
            </form>
            
            </td>
        </tr>
        @endforeach
    </tbody>

</table>
</div><br><br><br>
<br><br><br><br>
@endsection