@extends('layaout')
@section('title', 'Proyecto | ' .$agregaporid->nombre)
@section('contect')
        <div class="container">
            <div class="bg-white p-5 shadow rounded">

                <h1 class=" text-center">Nombre del proyecto: {{$agregaporid->nombre}}</h1>
                <button class="btn btn-primary"><a class="text-white" href="{{route('agregar.index')}}">Regresar a la lista</a></button>
                <div class="mt-4">
                <p>Url del proyecto: {{$agregaporid->url_proyecto}}</p>
                <p> Descripcion del proyecto: {{$agregaporid->descripcion}}  </p>
                <p> Fecha de creacion del proyecto: {{$agregaporid->created_at->format('Y-m-d')}}  </p>
                <p> Fecha de actualizacion del proyecto: {{$agregaporid->updated_at->format('Y-m-d')}}  </p>
            </div>
        @auth
        <div class="d-flex justify-content-between align-items-center">


        <div class="btn-group btn-group-sm mx-auto">
            <button class="btn btn-primary"><a class="text-white" href="{{route('agregar.edit',$agregaporid)}}">Editar Proyecto</a></button>
            <button class="btn btn-danger ml-5"><a  class="text-white" onclick="document.getElementById('delete-project').submit()"  href="{{route('agregar.edit',$agregaporid)}}">Eliminar Proyecto</a></button>
            </div>
        </div>
             <form class="d-none" action="{{route('agregar.destroy',$agregaporid)}}" method="POST">
            @csrf @method('DELETE')

        </form>
        @endauth
        </div>

    </div>


 @endsection


