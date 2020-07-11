@extends('layaout')
@section('title','Contacto')
@section('contect')

@if (session('status'))
@include('partials._session-status')
@endif
<div class="container mt-4">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">
            {{-- @include('partials.validation-errors') --}}
            <form action="{{route('contactoform.addDatos')}}" class="bg-white shadow rounded py-3 px-4"  method="POST">
                @csrf
                <h1 class="display-4 text-center">@lang('Contacto')</h1>
                <hr>
                            <div class="form-group">
                             <label for="">Nombre</label>
                             <input name="nombre"   value="{{old('nombre')}}"  type="text" class="form-control bg-light  @error('nombre') is-invalid  @else border-0  @enderror shadow-sm " >
                             @error('nombre')
                             <div class="invalid-feedback" role="alert">
                                 {{$message}}
                                  </div >
                             @enderror
                         </div>
                            <div class="form-group">
                             <label for="">Asunto</label>
                             <input name="asunto"type="text" value="{{old('asunto')}}"   class="form-control bg-light  @error('nombre') is-invalid  @else border-0 @enderror shadow-sm ">
                             @error('asunto')
                             <div class="invalid-feedback" role="alert">
                                 {{$message}}
                                  </div >
                             @enderror
                         </div>

                         <div class="form-group">
                             <label for="">Correo</label>
                             <input name="email" value="{{old('email')}}" type="text"  class="form-control bg-light  @error('email') is-invalid  @else border-0 @enderror shadow-sm">
                             @error('email')
                             <div class="invalid-feedback" role="alert">
                                 {{$message}}
                                  </div >
                             @enderror
                         </div>

                         <div class="form-group">
                             <label for="">Comentarios</label>
                             <textarea name="comentarios" value="{{old('comentarios')}}"   class="form-control bg-light  @error('comentarios') is-invalid  @else border-0 @enderror shadow-sm" id="" cols="30" rows="10"></textarea>
                             @error('comentarios')
                             <div class="invalid-feedback" role="alert">
                                 {{$message}}
                                  </div >
                             @enderror
                         </div>
                         <button class="btn btn-outline-success btn-lg form-control">Enviar</button>
                 </form>
            </div>
        </div>
     </div>
@endsection



