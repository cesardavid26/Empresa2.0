
<div class="form-group">
<label for="marca">{{'Marca'}}</label>
 <select name="marca_id" id="marca_id" class="form-control">
                <option values="">Seleccione...</option>
                @foreach($marcas as $marca)
                <option value="{{$marca->id}}">{{$marca->nombre}}</option>
                @endforeach
            </select><br>
</div>

<div class="form-group">
<label for="categoria">{{'Categoria'}}</label>
 <select name="categoria_id" id="categoria_id" class="form-control">
                 <option values="">Seleccione...</option>
                @foreach($categorias as $categoria)
                <option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
                @endforeach
            </select><br>
</div>

<div class="form-group">
<label for="referencia">{{'Referencia'}}</label>
<input type="text" name="referencia" id="referencia" class="form-control"
value="{{isset($producto->referencia)?$producto->referencia:''}}"><br>
</div>

<div class="form-group">
<label for="nombre">{{'Nombre'}}</label>
<input type="text" name="nombre" id="nombre"  class="form-control"
value="{{isset($producto->nombre)?$producto->nombre:''}}"><br>
</div>

<div class="form-group">
<label for="descripcionCorta">{{'Descripcion Corta'}}</label>
<textarea type="text" name="descripcioncorta" id="descripcioncorta" rows="4" cols="50"  class="form-control"
value="{{isset($producto->descripcioncorta)?$producto->descripcioncorta:''}}">{{isset($producto->descripcioncorta)?$producto->descripcioncorta:''}}</textarea>
<br></div>

<div class="form-group">
<label for="detalle">{{'Detalle'}}</label>
<textarea type="text" name="detalle" id="detalle" rows="6" cols="50" class="form-control"
value="{{isset($producto->detalle)?$producto->detalle:''}}">{{isset($producto->detalle)?$producto->detalle:''}}</textarea>
<br></div>

<div class="form-group">
<label for="valor">{{'Valor'}}</label>
<input type="text" name="valor" id="valor" class="form-control"
value="{{isset($producto->valor)?$producto->valor:''}}"><br>
</div>

<div class="form-group">
<label for="palabrasclave">{{'Palabras clave'}}</label>
<input type="text" name="palabrasclave" id="palabrasclave" class="form-control"
value="{{isset($producto->palabrasclave)?$producto->palabrasclave:''}}"><br>
</div>

<div class="form-group">
<label for="estado">{{'Estado'}}</label>
<select name="estado" id="estado" class="form-control">
                <option values="">Seleccione...</option>
  <option value="Disponible">Disponible</option>
  <option value="Agotado">Agotado</option>
 
</select><br>
</div>
<div class="form-group">
<label for="foto">{{'Foto'}}</label>
@if(isset($producto->foto))
<img class="img-fluid img-thumbnail" src="{{asset('storage').'/'.$producto->foto}}" alt="" width="150">

@endif
<input type="file" name="foto" id="foto" value="" class="form-control-file"><br>
</div>

<input class="btn btn-success" type="submit" value="{{$Modo=='crear' ? 'Agregar':'Modificar'}}
">
<a href="{{url('producto')}}" class="btn btn-primary">Regresar</a>