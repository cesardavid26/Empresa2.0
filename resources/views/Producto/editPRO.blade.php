<form action="{{url('/producto/'.$producto->id)}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}
{{method_field('PATCH')}}
<label for="marca">{{'Marca'}}</label>
 <select name="marca_id" id="marca_id" class="form-control">
 <option value="">Seleccione</option>
                @foreach($marcas as $marca)
                <option value="{{$marca->id}}">{{$marca->nombre}}</option>
                @endforeach
            </select><br>
<label for="categoria">{{'Categoria'}}</label>
 <select name="categoria_id" id="categoria_id" class="form-control">
 <option value="">Seleccione</option>
                @foreach($categorias as $categoria)
                <option value="{{$categoria->id}}">{{$categoria->id}}</option>
                @endforeach
            </select><br>

<label for="referencia">{{'Referencia'}}</label>
<input type="text" name="referencia" id="referencia" value="{{$producto->referencia}}"><br>

<label for="nombre">{{'Nombre'}}</label>
<input type="text" name="nombre" id="nombre" value="{{$producto->nombre}}"><br>

<label for="descripcionCorta">{{'Descripcion Corta'}}</label>
<textarea type="text" name="descripcioncorta" id="descripcioncorta" rows="4" cols="50" value="{{$producto->descripcioncorta}}">{{$producto->descripcioncorta}}</textarea>
<br>

<label for="detalle">{{'Detalle'}}</label>
<textarea type="text" name="detalle" id="detalle" rows="6" cols="50" value="{{$producto->detalle}}">{{$producto->detalle}}</textarea>
<br>

<label for="valor">{{'Valor'}}</label>
<input type="text" name="valor" id="valor" value="{{$producto->valor}}"><br>

<label for="palabrasclave">{{'Palabras clave'}}</label>
<input type="text" name="palabrasclave" id="palabrasclave" value="{{$producto->palabrasclave}}"><br>

<label for="estado">{{'Estado'}}</label>
<select name="estado" id="estado">
<option value="">Seleccione</option>
  <option value="Disponible">Disponible</option>
  <option value="Agotado">Agotado</option>
 
</select><br>

<label for="foto">{{'Foto'}}</label>
<br>
{{$producto->foto}}
<br>
<input type="file" name="foto" id="foto" value=""><br>

<input type="submit" value="Editar">
</form>