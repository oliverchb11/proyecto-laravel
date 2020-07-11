@extends('layaout')
@section('title','Agregar')

@section('contect')

<div class="container">
        <div class="d-flex  justify-content-between align-items-center">
            <h1 class="text-center display-4 mb-0">Proyectos</h1>
            @auth
            <button class="btn btn-primary">
                <a href="{{route('agregar.create')}}" style="text-decoration: none;color:white;">
                    Crear Proyecto
                </a>
            </button>
            @endauth
        </div>
        <hr>
            <ul class="list-group">

                @forelse ($agregar as $agregaru)
                    <li class="list-group-item border-0 mb-3 shadow-sm">
                        <a class="d-flex justify-content-between align-items-center" href="{{route('agregar.show',$agregaru)}}">
                      <span class="text-secondary font-weight-bold">  {{$agregaru->nombre}}     </span>
                      <span class="text-black-50">     {{$agregaru->created_at->format('Y-m-d')}} </span>
                     </a> </li>
                    {{-- <li class="list-group-item">Creado el :  </li> --}}
                    {{-- <li class="list-group-item">Url del proyecto: <a href="{{$agregaru->url_proyecto}}" target="_blank">{{$agregaru->url_proyecto}}</a></li>
                    <li class="list-group-item">Descripcion del proyecto: {{$agregaru->descripcion}}  </li>

                    <li class="list-group-item">Actualizado el: {{$agregaru->updated_at->format('Y-m-d')}}  </li> --}}
                    <hr>
                    @empty
                    <li class="list-group-item border-0 mb-3 shadow-sm">No hay datos</li>
                 @endforelse
                 {{$agregar->links()}}
             </ul>
        </div>




@endsection



