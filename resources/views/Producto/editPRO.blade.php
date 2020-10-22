@extends('layouts.app')

@section('content')

<div class="container">
<form action="{{url('/producto/'.$producto->id)}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}
{{method_field('PATCH')}}

@include('producto.formPRO',['Modo'=>'editar']);


</form>
</div>
@endsection