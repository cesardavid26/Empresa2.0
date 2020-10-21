@if(Session::has('Mensaje')){{
Session::get('Mensaje')
}}
@endif

<a href="{{url('producto/create')}}">Agregar Producto</a>

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Foto</th>
            <th>Nombre</th>
            <th>Referencia</th>
            <th>Descripcion Corta</th>
            <th>Valor</th>
            <th>Categoria</th>
            <th>Marca</th>
            <th>Estado</th>
            <th>Acciones</th>
            

        </tr>
    </thead>
    <tbody>
    @foreach($datos as $producto)
        <tr>
            <td>{{$loop->iteration}}</td>

            <td>
            <img src="{{asset('storage').'/'.$producto->foto}}" alt="" width="150">
            </td>
            <td>{{$producto->nombre}}</td>
            <td>{{$producto->referencia}}</td>
            <td>{{$producto->descripcioncorta}}</td>
            <td>{{$producto->valor}}</td>
            <td>{{$producto->categoria_id}}</td>
            <td>{{$producto->nombre_marca}}</td>
            <td>{{$producto->estado}}</td>
            <td><a href="{{url('/producto/'.$producto->id.'/edit')}}">
            Editar
            </a>  | 
            
            <form method="post" action="{{url('/producto/'.$producto->id)}}">
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <button type="submit" onClick="return confirm('¿Borrar?');">Borrar</button> 
            </form>
            
            </td>
            

        </tr>
        @endforeach
    </tbody>

</table>