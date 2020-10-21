<a href="{{url('marca/create')}}">Agregar Marca</a>

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Acciones</th>
            

        </tr>
    </thead>
    <tbody>
    @foreach($marcas as $marca)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$marca->nombre}}</td>
            <td>{{$marca->descripcion}}</td>
            <td>
            <a href="{{url('/marca/'.$marca->id.'/edit')}}">
            Editar
            </a> | 
            
            <form method="post" action="{{url('/marca/'.$marca->id)}}">
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <button type="submit" onClick="return confirm('¿Borrar?');">Borrar</button> 
            </form>
            
            </td>
            

        </tr>
        @endforeach
    </tbody>

</table>