@extends('layouts.app')

@section('content')

<div class="container">
<form action="{{url('/producto/'.$producto->id)}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}
{{method_field('PATCH')}}

@include('Producto.formPRO',['Modo'=>'editar'])


</form>
</div>
@endsection