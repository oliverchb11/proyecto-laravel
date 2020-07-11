@extends('layaout')
@section('contect')
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">

            <form class="bg-white py-3 px-4 shadow rounded"  action="{{route('agregar.update',$agregar)}}" method="POST">
                <h1 class="text-center display-4">Editar Proyecto</h1>
                <hr>
                @method('PUT')
                @include('projects._form',['btnText'=>'Actualizar Proyecto','colorBtn'=>'success'])
            </form>
        </div>
        </div>
    </div>
@endsection



