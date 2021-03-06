@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">

     <div class="col-sm-4">
            <div class="nav flex-column" id="aside-menu" role="tablist" aria-orientation="vertical">
                <h5>Categorias</h5>
                @isset($categorias)
                @foreach($categorias as $categoria)
                <a class="nav-link" href="#">{{$categoria->nombre}}</a>
                @endforeach
                @endisset
            </div>
        </div>
     <div class="col-sm-8">
      <div id="productos" class="pt-2 pb-4">
           <h2 class="pt-2 pb-4" style="font-family: 'IBM Plex Sans', sans-serif;">Listado de Productos
           <h6> 
           @if($search)
           <div class="alert alert-primary" role="alert">
           Los resultados de tu busqueda '{{$search}}' son:
           </div>
           @endif
           </h6>
           </h2>
           <form class="form-inline ml-3">
           <div class="input-group ">
           <input class="form-control" type="text" placeholder="Search" aria-label="Search">
           <div class="input-group-append">
           <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
           </div>
           </div>
           </form><br>
         <div class="row row-cols-1 row-cols-s-1 row-cols-md-2 row-cols-lg-4">
                @foreach($listados as $listado)
                  <div class="col mb-4">
                  
                  @if($listado->estado == "Agotado")
                    <div class="card text-white  bg-secondary mb-3">
                    @elseif($listado->estado == "Disponible")
                     <div class="card  bg-white mb-3">
                     @endif
                      <a data-toggle="modal" data-target="#modalProducto{{$listado->id}}"><img src="{{asset('storage').'/'.$listado->foto}}" alt="Card image cap" height="220"   class="card-img-top" ></a>
                       <div class="card-body">
                        <p class="card-text" style="font-size: 15px;">{{$listado->nombre}}</p>
                        <b><p class="card-text">${{$listado->valor}}</p></b>
                        @if($listado->estado == "Disponible")
                           <b><p class="card-text" style="color: #5cb85c; font-size: 18px;">{{$listado->estado}}</p></b>
                        @elseif($listado->estado == "Agotado")
                           <b><p class="card-text" style="color: #d9534f; font-size: 18px;">{{$listado->estado}}</p></b>
                        @endif
                        
                      </div>
                    </div>
                  </div>
                  @endforeach
         </div>
         </div>
               </div> 
               </div>
@endsection