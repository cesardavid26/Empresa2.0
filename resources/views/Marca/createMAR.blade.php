@extends('layouts.app')

@section('content')

<div class="container">
<form action="{{url('/marca')}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}

@include('marca.formMAR',['Modo'=>'crear']);
</form>
</div>
@endsection