@if(Session::has('Mensaje')){{
Session::get('Mensaje')
}}
@endif

<a href="{{url('categoria/create')}}">Agregar Categoria</a>

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>Categoria</th>
            <th>Descripcion</th>
            <th>Estado</th>
            <th>Acciones</th>
            

        </tr>
    </thead>
    <tbody>
    @foreach($categorias as $categoria)
        <tr>
            <td>{{$categoria->id}}</td>
            <td>{{$categoria->descripcion}}</td>
            <td>{{$categoria->estado}}</td>
            <td>
            <a href="{{url('/categoria/'.$categoria->id.'/edit')}}">
            Editar
            </a>
             | 
            
            <form method="post" action="{{url('/categoria/'.$categoria->id)}}">
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <button type="submit" onClick="return confirm('¿Borrar?');">Borrar</button> 
            </form>
            
            </td>
            

        </tr>
        @endforeach
    </tbody>

</table>