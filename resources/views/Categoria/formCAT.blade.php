<label for="nombre">{{'Nombre'}}</label>
<input type="text" name="nombre" id="nombre" value="{{isset($categoria->nombre)?$categoria->nombre:''}}"><br>


<label for="descripcion">{{'Descripcion'}}</label>
<textarea type="text" name="descripcion" id="descripcion" rows="4" cols="50" 
value="{{isset($categoria->descripcion)?$categoria->descripcion:''}}">{{isset($categoria->descripcion)?$categoria->descripcion:''}}</textarea><br>

<label for="estado">{{'Estado'}}</label>
<select name="estado" id="estado">
<option value="">Seleccione</option>
  <option value="Activa">Activada</option>
  <option value="No Activa">Desactivada</option>
 
</select><br>
<input type="submit" value="{{$Modo=='crear' ? 'Agregar':'Modificar'}}">
<a href="{{url('categoria')}}">Regresar</a>