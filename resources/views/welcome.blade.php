@extends('layouts.app')

@section('content')

    <div class="container-fluid">
      <div class="row">

        <div class="col-md-7">
          <div class="pt-4 pb-4">
             <h2 style="font-family: 'IBM Plex Sans', sans-serif;">¿Quienes somos?</h2>
               <p>{{$empresa->quienessomos}}</p>
          </div>
          <div id="productos" class="pt-2 pb-4">
           <h2 class="pb-4" style="font-family: 'IBM Plex Sans', sans-serif;">Recientemente Agregados</h2>
             <div class="row row-cols-1 row-cols-s-1 row-cols-md-2 row-cols-lg-3">
                @foreach($listados as $listado)
                  <div class="col mb-4">
                    <div class="card">
                      <a data-toggle="modal" data-target="#modalProducto{{$listado->id}}"><img src="{{asset('storage').'/'.$listado->foto}}" alt="Card image cap" height="240" class="card-img-top" ></a>
                       <div class="card-body">
                        <p style="text-align:center; font-size:15px;" class="card-text">{{$listado->nombre}}</p>
                        <b><p style="text-align:center;" class="card-text">${{$listado->valor}}</p></b>
                      </div>
                    </div>
                  </div>
                  @endforeach
              </div>
           <div class="pt-2 pb-4">
                        <a class="btn btn-light" href="{{route('listPRO')}}">Ver Más</a>
           </div> 
          </div>  
    </div>
    <div style="display:block;" class="col-md-5 pt-4 pb-4">
    <!-- SnapWidget -->
<iframe src="https://snapwidget.com/embed/884368" class="snapwidget-widget" allowtransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden;  width:495px; height:596px"></iframe>
    </div>
    </div>

    </div>
 
    @endsection