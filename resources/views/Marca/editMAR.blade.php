<form action="{{url('/marca/'.$marca->id)}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}
{{method_field('PATCH')}}
<label for="nombre">{{'Nombre'}}</label>
<input type="text" name="nombre" id="nombre" value="{{$marca->nombre}}"><br>

<label for="descripcion">{{'Descripcion'}}</label>
<textarea type="text" name="descripcion" id="descripcion" rows="4" cols="50" value="{{$marca->descripcion}}">{{$marca->descripcion}}</textarea>
<br>

<input type="submit" value="Modificar">
<a href="{{url('marca')}}">Regresar</a>
</form>