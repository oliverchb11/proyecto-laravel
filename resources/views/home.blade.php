@extends('layaout')
@section('title','Home')

@section('contect')
<div class="container">
    <div class="row">
        <div class="col-12 col-lg-6">
            <h1 class="display-4 text-center text-primary">Desarrollo web</h1>
            <p class="lead text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, sit consequuntur? Quia, illo cumque quae quibusdam rem quisquam nemo et nobis animi ut? Voluptatem laudantium consequatur dolor ratione alias mollitia!</p>
            <a class="btn btn-lg btn-block btn-primary text-center" href="{{route('contacto')}}">Contáctame</a>
            <a class="btn btn-lg btn-block btn-outline-primary text-center" href="{{route('agregar.index')}}">Portafolio</a>
        </div>
         <div class="col-12 col-lg-6">
            <img class="img-fluid mb-4" src="/img/img.svg" alt="Desarrollo web">
        </div>
    </div>
</div>


@endsection

{{-- @auth
{{auth()->user()->name}}
{{auth()->user()->email}}
{{auth()->user()->created_at->format('Y-m-d')}}
{{auth()->user()->updated_at->format('Y-m-d')}}
<div id="hola">
    hola mundo
</div>
@endauth --}}
