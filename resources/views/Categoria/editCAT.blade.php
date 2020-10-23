@extends('layouts.app')

@section('content')

<div class="container">

<form action="{{url('/categoria/'.$categoria->id)}}" class="form-horizontal" method="post" enctype="multipart/form-data">
{{csrf_field()}}
{{method_field('PATCH')}}

@include('categoria.formCAT',['Modo'=>'editar'])

</form>
</div>
@endsection