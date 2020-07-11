@extends('layaout')
@section('title','Crear Proyecto')
@section('contect')
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-10 col-lg-6 mx-auto">
            <form class="bg-white py-3 px-4 shadow rounded" action="{{route('agregar.store')}}" method="POST">
                <h1 class="text-center display-4">Crear Proyecto</h1>
                <hr>
                @include('projects._form',['btnText'=>'Crear Proyecto','colorBtn'=>'primary'])
            </form>
        </div>
    </div>
</div>

@endsection



