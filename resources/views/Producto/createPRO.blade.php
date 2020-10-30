@extends('layouts.app')

@section('content')

<div class="container">
<form action="{{url('/producto')}}" method="post" enctype="multipart/form-data" >
{{csrf_field()}}


@include('Producto.formPRO',['Modo'=>'crear'])



</form>
</div>
@endsection