@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">

     <div class="col-sm-4">
            <div class="nav flex-column" id="aside-menu" role="tablist" aria-orientation="vertical">
                <h5>Categorias</h5>
                @isset($categorias)
                @foreach($categorias as $categoria)
                <a class="nav-link" href="{{url('/listado/'.$categoria->id.'/filter')}}">{{$categoria->nombre}}</a>
                @endforeach
                @endisset
            </div>
        </div>
     <div class="col-sm-8">
      <div id="productos" class="pt-2 pb-4">
           <h2 class="pt-2 pb-4" style="font-family: 'IBM Plex Sans', sans-serif;">Listado de Productos</h2>
         <div class="row row-cols-1 row-cols-s-1 row-cols-md-2 row-cols-lg-4">
                @foreach($listados as $listado)
                  <div class="col mb-4">
                  @if($listado->estado == "Agotado")
                    <div class="card text-white  bg-secondary mb-3">
                    @elseif($listado->estado == "Disponible")
                     <div class="card  bg-white mb-3">
                     @endif
                      <a data-toggle="modal" data-target="#modalProducto{{$listado->id}}"><img src="{{asset('storage').'/'.$listado->foto}}" alt="Card image cap" height="140" width="180"  class="card-img-top" ></a>
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