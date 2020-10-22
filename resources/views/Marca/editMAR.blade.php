@extends('layouts.app')

@section('content')

<div class="container">
<form action="{{url('/marca/'.$marca->id)}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}
{{method_field('PATCH')}}
@include('marca.formMAR',['Modo'=>'editar']);
</form>
</div>
@endsection