@extends('layouts.app')

@section('content')

<div class="container">
<form action="{{url('/empresa/'.$empresa->id)}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}
{{method_field('PATCH')}}
@include('empresa.formEMP',['Modo'=>'editar'])
</form>
</div>
@endsection