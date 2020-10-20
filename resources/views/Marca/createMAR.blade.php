aqui se crean marcas
<form action="{{url('/marca')}}" method="post" enctype="multipart/form-data">
{{csrf_field()}}
<label for="nombre">{{'Nombre'}}</label>
<input type="text" name="nombre" id="nombre" value=""><br>

<label for="descripcion">{{'Descripcion'}}</label>
<textarea type="text" name="descripcion" id="descripcion" rows="4" cols="50" value=""></textarea>
<br>
<input type="submit" value="Agregar">

</form>