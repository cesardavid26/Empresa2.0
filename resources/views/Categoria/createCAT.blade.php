@extends('layouts.app')

@section('content')

<div class="container">
<form action="{{url('/categoria')}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}
@include('categoria.formCAT',['Modo'=>'crear']);

</form>
</div>
@endsection