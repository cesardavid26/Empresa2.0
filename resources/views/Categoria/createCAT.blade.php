@extends('layouts.app')

@section('content')

<div class="container">
<form action="{{url('/categoria')}}" class="form-horizontal" method="post" enctype="multipart/form-data">
{{csrf_field()}}
@include('Categoria.formCAT',['Modo'=>'crear'])

</form>
</div>
@endsection