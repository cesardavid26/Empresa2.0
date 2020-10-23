<div class="form-group">
<label for="nombre">{{'Nombre'}}</label>

<input type="text" class="form-control" name="nombre" id="nombre" value="{{isset($categoria->nombre)?$categoria->nombre:''}}"><br>
</div>

<div class="form-group">
<label for="descripcion">{{'Descripcion'}}</label>
<textarea class="form-control" type="text" name="descripcion" id="descripcion" rows="4" cols="50" 
value="{{isset($categoria->descripcion)?$categoria->descripcion:''}}">{{isset($categoria->descripcion)?$categoria->descripcion:''}}</textarea><br>
</div>

<div class="form-group">
<label for="estado">{{'Estado'}}</label>
<select class="form-control" name="estado" id="estado">
<option value="">Seleccione</option>
  <option value="Activa">Activada</option>
  <option value="No Activa">Desactivada</option>
</select><br>
</div>
<input type="submit" class="btn btn-success" value="{{$Modo=='crear' ? 'Agregar':'Modificar'}}">
<a class="btn btn-primary" href="{{url('categoria')}}">Regresar</a>