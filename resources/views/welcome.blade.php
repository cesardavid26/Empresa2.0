@extends('layouts.app')

@section('content')

    <div class="container">
    <div class="row">

     <div class="col-sm-7">
     <h2 style="font-family: 'IBM Plex Sans', sans-serif;">¿Quienes somos?</h2>
       <p>{{$empresa->quienessomos}}</p>
    
     <div id="productos" class="pt-2 pb-4">
           <h2 class="pt-2 pb-4" style="font-family: 'IBM Plex Sans', sans-serif;">Recientemente Agregados</h2>
         <div class="row row-cols-1 row-cols-s-1 row-cols-md-2 row-cols-lg-4">
                @foreach($listados as $listado)
                  <div class="col mb-4">
                    <div class="card">
                      <a data-toggle="modal" data-target="#modalProducto{{$listado->id}}"><img src="{{asset('storage').'/'.$listado->foto}}" alt="Card image cap" height="150" width="180"  class="card-img-top" ></a>
                      <div class="card-body">
                        <p class="card-text">{{$listado->nombre}}</p>
                        <b><p class="card-text">${{$listado->valor}}</p></b>
                      </div>
                    </div>
                  </div>
                  @endforeach
         </div>
               </div>  
    </div>
    <div class="col-sm-5">
    <!-- SnapWidget -->
<iframe src="https://snapwidget.com/embed/884368" class="snapwidget-widget" allowtransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden;  width:495px; height:596px"></iframe>
    </div>
    </div>

    </div>
    @endsection