

<div class="form-group">
<label for="nombre">{{'Nombre'}}</label>

<input type="text" class="form-control" name="nombre" id="nombre" required="" 
value="{{isset($empresa->nombre)?$empresa->nombre:''}}" required=""><br>
</div>

<div class="form-group">
<label for="quienessomos">{{'Quienes somos'}}</label>
<textarea class="form-control" type="text" name="quienessomos" id="quienessomos" rows="4" cols="50" required=""
value="{{isset($empresa->quienessomos)?$empresa->quienessomos:''}}">{{isset($empresa->quienessomos)?$empresa->quienessomos:''}}</textarea><br>
</div>

<div class="form-group">
<label for="emailcontacto">{{'Email Contacto'}}</label>
<input type="text" class="form-control" name="emailcontacto" id="emailcontacto" required="" 
value="{{isset($empresa->emailcontacto)?$empresa->emailcontacto:''}}" required=""><br>
</div>

<div class="form-group">
<label for="direccion">{{'Direccion'}}</label>
<input type="text" class="form-control" name="direccion" id="direccion" required="" 
value="{{isset($empresa->direccion)?$empresa->direccion:''}}" required=""><br>
</div>

<div class="form-group">
<label for="telefonocontacto">{{'Telefono Contacto'}}</label>
<input type="text" class="form-control" name="telefonocontacto" id="telefonocontacto" required="" 
value="{{isset($empresa->telefonocontacto)?$empresa->telefonocontacto:''}}" required=""><br>
</div>

<div class="form-group">
<label for="facebook">{{'Facebook'}}</label>
<input type="text" class="form-control" name="facebook" id="facebook" required="" 
value="{{isset($empresa->facebook)?$empresa->facebook:''}}" required=""><br>
</div>

<div class="form-group">
<label for="twitter">{{'Twitter'}}</label>
<input type="text" class="form-control" name="twitter" id="twitter" required="" 
value="{{isset($empresa->twitter)?$empresa->twitter:''}}" required=""><br>
</div>

<div class="form-group">
<label for="instagram">{{'Instagram'}}</label>
<input type="text" class="form-control" name="instagram" id="instagram" required="" 
value="{{isset($empresa->instagram)?$empresa->instagram:''}}" required=""><br>
</div>


<input type="submit" class="btn btn-success" value="{{$Modo=='crear' ? 'Agregar':'Modificar'}}">
<a class="btn btn-primary" href="{{url('empresa')}}">Regresar</a>