aqui se crea un producto
<form action="{{url('/producto')}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}

<label for="marca">{{'Marca'}}</label>
 <select name="marca_id" id="marca_id" class="form-control">
                @foreach($marcas as $marca)
                <option value="{{$marca->id}}">{{$marca->nombre}}</option>
                @endforeach
            </select><br>
<label for="categoria">{{'Categoria'}}</label>
 <select name="categoria_id" id="categoria_id" class="form-control">
                @foreach($categorias as $categoria)
                <option value="{{$categoria->id}}">{{$categoria->id}}</option>
                @endforeach
            </select><br>

<label for="referencia">{{'Referencia'}}</label>
<input type="text" name="referencia" id="referencia" value=""><br>

<label for="nombre">{{'Nombre'}}</label>
<input type="text" name="nombre" id="nombre" value=""><br>

<label for="descripcionCorta">{{'Descripcion Corta'}}</label>
<textarea type="text" name="descripcioncorta" id="descripcioncorta" rows="4" cols="50" value=""></textarea>
<br>

<label for="detalle">{{'Detalle'}}</label>
<textarea type="text" name="detalle" id="detalle" rows="6" cols="50" value=""></textarea>
<br>

<label for="valor">{{'Valor'}}</label>
<input type="text" name="valor" id="valor" value=""><br>

<label for="palabrasclave">{{'Palabras clave'}}</label>
<input type="text" name="palabrasclave" id="palabrasclave" value=""><br>

<label for="estado">{{'Estado'}}</label>
<select name="estado" id="estado">
  <option value="Disponible">Disponible</option>
  <option value="Agotado">Agotado</option>
 
</select><br>

<label for="foto">{{'Foto'}}</label>
<input type="file" name="foto" id="foto" valuer=""><br>

<input type="submit" value="Agregar">

</form>