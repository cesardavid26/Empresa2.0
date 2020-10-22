


<label for="nombre">{{'Nombre'}}</label>
<input type="text" name="nombre" id="nombre" value="{{isset($marca->nombre)?$marca->nombre:''}}"><br>

<label for="descripcion">{{'Descripcion'}}</label>
<textarea type="text" name="descripcion" id="descripcion" rows="4" cols="50" 
 value="{{isset($marca->descripcion)?$marca->descripcion:''}}">{{isset($marca->descripcion)?$marca->descripcion:''}}</textarea>
<br>
<input type="submit" value="{{$Modo=='crear' ? 'Agregar':'Modificar'}}">
<a href="{{url('marca')}}">Regresar</a>