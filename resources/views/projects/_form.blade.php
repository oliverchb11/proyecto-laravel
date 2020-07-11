@csrf
<div class="form-group">
    <label for="">Nombre Proyecto</label>
    <input type="text" name="nombre" value="{{old('nombre',$agregar->nombre)}}"  class="form-control bg-light  @error('nombre') is-invalid  @else border-0  @enderror shadow-sm ">
    @error('nombre')
    <div class="invalid-feedback" role="alert">
        {{$message}}
         </div >
    @enderror
</div>
<div class="form-group">
    <label for="">Url del Proyecto</label>
    <input type="text" name="url_proyecto"   value="{{old('url_proyecto',$agregar->url_proyecto)}}" class="form-control bg-light  @error('url_proyecto') is-invalid  @else border-0  @enderror shadow-sm ">
    @error('url_proyecto')
    <div class="invalid-feedback" role="alert">
        {{$message}}
    </div >
    @enderror
</div>
<div class="form-group">
    <label for="">Descripcion Proyecto</label>
    <textarea name="descripcion" id=""  cols="30" rows="10" class="form-control bg-light  @error('descripcion') is-invalid  @else border-0  @enderror shadow-sm ">{{old('descripcion',$agregar->descripcion)}}</textarea>
    @error('descripcion')
    <div class="invalid-feedback" role="alert">
        {{$message}}
    </div >
    @enderror
</div>
<button class="btn btn-{{$colorBtn}} form-control btn-lg">{{$btnText}}</button>
<button class="btn  btn-block btn-lg"><a  href="{{route('agregar.index')}}">Cancelar</a></button>
