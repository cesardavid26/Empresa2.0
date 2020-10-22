

<label for="marca">{{'Marca'}}</label>
 <select name="marca_id" id="marca_id" class="form-control">
                <option values="">Seleccione...</option>
                @foreach($marcas as $marca)
                <option value="{{$marca->id}}">{{$marca->nombre}}</option>
                @endforeach
            </select><br>
<label for="categoria">{{'Categoria'}}</label>
 <select name="categoria_id" id="categoria_id" class="form-control">
                 <option values="">Seleccione...</option>
                @foreach($categorias as $categoria)
                <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                @endforeach
            </select><br>

<label for="referencia">{{'Referencia'}}</label>
<input type="text" name="referencia" id="referencia" 
value="{{isset($producto->referencia)?$producto->referencia:''}}"><br>

<label for="nombre">{{'Nombre'}}</label>
<input type="text" name="nombre" id="nombre" 
value="{{isset($producto->nombre)?$producto->nombre:''}}"><br>


<label for="descripcionCorta">{{'Descripcion Corta'}}</label>
<textarea type="text" name="descripcioncorta" id="descripcioncorta" rows="4" cols="50" 
value="{{isset($producto->descripcioncorta)?$producto->descripcioncorta:''}}">{{isset($producto->descripcioncorta)?$producto->descripcioncorta:''}}</textarea>
<br>

<label for="detalle">{{'Detalle'}}</label>
<textarea type="text" name="detalle" id="detalle" rows="6" cols="50" 
value="{{isset($producto->detalle)?$producto->detalle:''}}">{{isset($producto->detalle)?$producto->detalle:''}}</textarea>
<br>

<label for="valor">{{'Valor'}}</label>
<input type="text" name="valor" id="valor" 
value="{{isset($producto->valor)?$producto->valor:''}}"><br>


<label for="palabrasclave">{{'Palabras clave'}}</label>
<input type="text" name="palabrasclave" id="palabrasclave" 
value="{{isset($producto->palabrasclave)?$producto->palabrasclave:''}}"><br>

<label for="estado">{{'Estado'}}</label>
<select name="estado" id="estado">
                <option values="">Seleccione...</option>
  <option value="Disponible">Disponible</option>
  <option value="Agotado">Agotado</option>
 
</select><br>

<label for="foto">{{'Foto'}}</label>
@if(isset($producto->foto))
<img src="{{asset('storage').'/'.$producto->foto}}" alt="" width="150">

@endif
<input type="file" name="foto" id="foto" value=""><br>

<input type="submit" value="{{$Modo=='crear' ? 'Agregar':'Modificar'}}
">
<a href="{{url('producto')}}">Regresar</a>