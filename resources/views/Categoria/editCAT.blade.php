Seccion para editar una categoria

<form action="{{url('/categoria/'.$categoria->id)}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}
{{method_field('PATCH')}}
<label for="descripcion">{{'Descripcion'}}</label>
<textarea type="text" name="descripcion" id="descripcion" rows="4" cols="50" value="{{$categoria->descripcion}}">
{{$categoria->descripcion}}</textarea><br>

<label for="estado">{{'Estado'}}</label>
<select name="estado" id="estado">
<option value="">Seleccione</option>
 <option value="Activa">Activa</option>
  <option value="No Activa">No Activa</option>
  
 
</select><br>

<input type="submit" value="Modificar">
<a href="{{url('categoria')}}">Regresar</a>

</form>