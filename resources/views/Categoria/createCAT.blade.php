aqui se crean catetorias
<form action="{{url('/categoria')}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}
<label for="descripcion">{{'Descripcion'}}</label>
<textarea type="text" name="descripcion" id="descripcion" rows="4" cols="50" value=""></textarea><br>

<label for="estado">{{'Estado'}}</label>
<select name="estado" id="estado">
  <option value="Activa">Activa</option>
  <option value="No Activa">No Activa</option>
 
</select>
<input type="submit" value="Agregar">

</form>