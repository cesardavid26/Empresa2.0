
<div class="form-group">
<label for="nombre">{{'Nombre'}}</label>
<input type="text" name="nombre" id="nombre" class="form-control" value="{{isset($marca->nombre)?$marca->nombre:''}}"><br>
</div>

<div class="form-group">
<label for="descripcion">{{'Descripcion'}}</label>
<textarea type="text" name="descripcion" id="descripcion" rows="4" cols="50" class="form-control"
 value="{{isset($marca->descripcion)?$marca->descripcion:''}}">{{isset($marca->descripcion)?$marca->descripcion:''}}</textarea>
<br></div>

<input type="submit" class="btn btn-success" value="{{$Modo=='crear' ? 'Agregar':'Modificar'}}">
<a class="btn btn-primary" href="{{url('marca')}}">Regresar</a>